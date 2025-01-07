<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $role_id = Auth::user()->employee_role->role_id;
            if($role_id == 1){
                return redirect()->route('dashboard');
            }elseif($role_id == 2){
                
            }
        }else{
            return $next($request);

        }

    }
}
