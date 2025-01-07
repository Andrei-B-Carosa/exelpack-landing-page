<?php

namespace App\Http\Controllers\Customer\Action;

use App\Http\Controllers\Controller;
use App\Mail\RequestQuotationCreated;
use App\Models\CustomerRequest\RequestInfo;
use App\Models\CustomerRequest\RequestProduct;
use App\Models\CustomerRequest\RequestQuotation;
use App\Models\CustomerRequest\RequestStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\RequestStack;

class CreateController extends Controller
{
    protected function res_message($index)
    {   
        $array_res = array(
            'Request Denied. Multiple Pending Request is Found.',
            'Your request has been successfully sent. You will receive an email with further details shortly.',
            'Something went wrong. Try again later',
        );

        return $array_res[$index];

    }

    public function create(Request $request)
    {
        $validator = $this->check_if_valid($request->all(),$request->action,'action','required','Missing request Parameter.');
        if($validator){
            switch($request->action){

                case 'request-quotation':
                    $res = $this->_createRequestQuotation($request);
                break;

                default:
                    $res = false;
                break;
            }

        }else{
            $res = false;
        }

        $data = array('status' => 'success','message' => 'request accepted','payload' => base64_encode(json_encode($res)));
        return json_encode($data);

    }

    public function _createRequestQuotation($request)
    {
        if($request){

            $inputs = [
                'fullname' => 'required',
                'email' => 'required|email',
                'company' => 'required',
                'phone' => 'required|numeric',
                'address' => 'required',
                'delivery_location' => 'required',
                'request_type' => 'required',
                'message' => 'required',
                'specs' => 'required',
            ];

            $this->_validateInputs($request, $inputs);

            $specs = $request->specs;
            $decodeSpecs = base64_decode($specs);
            $parseSpecs = json_decode($decodeSpecs);

            $productName = $parseSpecs->product;
            $productType = $parseSpecs->type;

            $column = ['id','name'];

            switch($productType){

                case 'corrugated carton':
                    $checkProduct =  $this->_Product($column,$productName,false,false,1);
                    if($checkProduct){
                        foreach($checkProduct as $product){

                            $checkDuplicate = RequestQuotation::with('rq_status')
                            ->where('ip_address', $request->ip())
                            ->whereHas('rq_status', function ($query) {
                                $query->where('request_status', 2);
                            })->count();

                            if($checkDuplicate == 0){

                                $rq = RequestQuotation::create([
                                    'request_no' => $this->quickRandom(),
                                    'request_type' =>$request->request_type,
                                    'ip_address' =>$request->ip(),
                                ]);

                                if($rq){
                                    $rq_info = RequestInfo::create([
                                        'rq_id' =>$rq->id,
                                        'requestor_name' =>$request->fullname,
                                        'requestor_email' =>$request->email,
                                        'requestor_telephone' =>$request->phone,
                                        'requestor_company' =>$request->company,
                                        'requestor_message' =>$request->message,
                                        'company_accreditation' =>$request->accreditation_type,
                                        'company_address'=>$request->address,
                                        'delivery_id'=>1,
                                    ]);

                                    $rq_product = RequestProduct::create([
                                        'rq_id' =>$rq->id,
                                        'product_id' =>$product['id'],
                                        'product_name' =>$product['name'],
                                        'product_type' =>$productType,
                                        'specification' =>$decodeSpecs,
                                    ]);

                                    $rq_status = RequestStatus::create([
                                        'rq_id' =>$rq->id,
                                    ]);

                                    if($rq_info && $rq_product && $rq_status){
                                        Mail::to($request->email)->bcc('andrei.carosa12@gmail.com')->later(
                                            now()->addMinutes(3),
                                            new RequestQuotationCreated($request->fullname,$productName,$productType,$parseSpecs,$rq->id)
                                        );
                                        return ['status'=>'success','message'=>$this->res_message(1)];
                                    }else{
                                        return false;
                                    }
                                }else{
                                    return false;
                                }

                            }else{
                                $this->_throwError($this->res_message(0));
                            }

                        }

                    }else{
                        $this->_throwError($this->res_message(2));
                    }
                break;

                default:
                break;
            }

        }
    }
}
