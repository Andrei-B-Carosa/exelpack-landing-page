<?php

namespace App\Http\Controllers\Auth;

use App\Events\LoginAttemptEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Cache\RateLimiter;
use Throwable;

class LoginController extends Controller
{
    protected $url;
    protected $device_details;

    public function __construct(Request $request)
    {
        $this->url = $request->segment(1);
        $this->device_details = $this->_device();
    }

    public function page()
    {
        switch($this->url){

            case 'customer-service':
                return view('auth.cs');
            break;

            case 'manager':
                return view('auth.mg');
            break;

            default:
                return redirect()->route('home');
            break;

        }

    }

    public function store(Request $request)
    {
        try {

            //check throttle
            $throttle = $this->_throttle($request);
            if ($throttle) {
                return $throttle;
            }

            //validate input
            $validator = $this->_validator($request->all());
            if ($validator) {
                return $validator;
            }

            //authenticate
            if (Auth::attempt($request->only('username', 'password'))) {

                $this->_throttle($request,'clear');
                $this->_loginEvent($request->input('username'), $request->ip(),200,'login_details');

                return $this->_validateAccount();

            } else {

                $this->_throttle($request,'hit');
                $this->_loginEvent($request->input('username'), $request->ip(),401,'login_details');

                return response()->json(['error' =>'Login Failed, Check your username or password.'], 401);

            }

        } catch (Throwable $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }

    }

    private function _throttle($request, $status = false)
    {
        $maxAttempts = 5;
        $decayMinutes = 3;

        $limiter = app(RateLimiter::class);
        $key = 'login_throttle_' . $request->ip();

        if ($status == 'hit')
        {
            $limiter->hit($key, $decayMinutes*60);
        }
        elseif ($status == 'clear')
        {
            $limiter->clear($key);
        }
        else {
            if ($limiter->tooManyAttempts($key, $maxAttempts, $decayMinutes*60))
            {
                $this->_loginEvent($request->input('username'),$request->ip(),429,'login_details');
                return response()->json(['error' => 'Too many login attempts. Please try again later.','throttle'=>true], 429);
            }
        }

        return null;
    }

    private function _validator($request)
    {
        $validator = Validator::make($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $this->_loginEvent($request->input('username'), $request->ip(),422,'login_details');
            return response()->json(['error' => 'Form Incomplete, Please complete the login form.'], 422);
        }

        return null;
    }

    private function _loginEvent($username, $ip, $status,$type)
    {
        event(new LoginAttemptEvent($username,$ip,$status,$this->device_details,$type));
    }

    public function _validateAccount()
    {
        if(Auth::check()){

            $user = Auth::user();

            if($user->status == 0)
            {
                $this->_destroy();
                return response()->json(['error' =>'Login Restricted, Your account is Deactivated.'], 401);
            }

            if($user->employee_role->role_id == 1)
            {
                return response()->json(['success'=>'Login Success','url'=>'customer-service/dashboard'],200);
            }

            elseif($user->employee_role->role_id == 2)
            {
                return response()->json(['success'=>'Login Success','url'=>'manager/dashboard'],200);
            }

            $this->_destroy();
            return response()->json(['error' =>'Login Failed, Check your Account Details.'], 401);

        }
    }

    public function _destroy()
    {
        if(Auth::check())
        {
            $this->_loginEvent(Auth::user()->username, false,200,'logout_details');
            Auth::logout();
            return redirect('/customer-service');
        }

    }
}
