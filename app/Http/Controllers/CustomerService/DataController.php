<?php

namespace App\Http\Controllers\CustomerService;

use App\Http\Controllers\Controller;
use App\Models\CustomerRequest\RequestQuotation;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function page_data(Request $request)
    {
        $inputs = [
            'data1' => 'required',
            'data2' => 'required',
        ];
        $this->_validateInputs($request, $inputs);

        $action = $request->data1;
        $data3 = isset($request->data3) ?$request->data3:false;

        switch($action){

            case 'request-quotation-info':
                $res = $this->request_quotation_info($data3);
            break;

            default:
                $res = false;
            break;

        }

        $data = array('status' => 'success','message' => 'request accepted','payload' => base64_encode(json_encode($res)));
        return json_encode($data);
    }

    public function request_quotation_info($id){

        $decryptId = $this->_decrypt($id);
        if($decryptId){

            $request_quote = RequestQuotation::with([
                'rq_status',
                'rq_info',
                'rq_product',
                'rq_processed_by_role',
                'rq_processed_by_info'
            ])->where('id',$decryptId)->first();

            if($request_quote){

                $array = array(
                    'requestor_name'=>$request_quote->rq_info->requestor_name,
                    'specs'=>json_decode($request_quote->rq_product->specification,true),
                    'product_name'=>$request_quote->rq_product->product_name,
                    'product_type'=>$request_quote->rq_product->product_type,
                    'estimated_price'=>$request_quote->rq_product->estimated_price,
                    'delivery_location'=>$request_quote->rq_info->delivery_id,
                    'company_address'=>$request_quote->rq_info->company_address,
                    'company_accreditation'=>$request_quote->rq_info->company_accreditation,
                    'requestor_message'=>$request_quote->rq_info->requestor_message,
                    'requestor_company'=>$request_quote->rq_info->requestor_company,
                    'requestor_telephone'=>$request_quote->rq_info->requestor_telephone,
                    'requestor_email'=>$request_quote->rq_info->requestor_email,
                    'request_no'=>$request_quote->request_no,
                    'request_status'=>$request_quote->rq_status->request_status,
                    'request_type'=>$request_quote->request_type,
                    'processed_by'=>$request_quote->rq_processed_by_info->fullname,
                    'rq_processed_by_role'=>$request_quote->rq_processed_by_role->role_id,
                );

                return $array;

            }else{
                return false;
            }
        }else{
            return false;
        }

    }
}
