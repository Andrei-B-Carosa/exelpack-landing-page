<?php

namespace App\Http\Controllers;

use App\Models\CartonInsert;
use App\Models\Exelpack\Products\BubbleSheet;
use App\Models\Exelpack\Products\CorrugatedBox;
use App\Models\Exelpack\Products\Danpla;
use App\Models\Exelpack\Products\OtherProduct;
use App\Models\Exelpack\Products\Foam;
use App\Models\Pallet;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function _device()
    {

        $agent   = new Agent();

        $platform       = $agent->platform();
        $platform_ver   = $agent->version($platform);

        $browser        = $agent->browser();
        $browser_ver    = $agent->version($browser);

        $device         = $agent->device();

        return [
            'os'=>$platform.'['.$platform_ver.']',
            'browser'=>$browser.'['.$browser_ver.']',
            'device'=>$device
        ];

    }

    public function quickRandom($length = 10)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    protected function check_if_valid($request,$value,$key,$required,$message)
    {
        $data = ($this->_requestValidator($request,$key,$required) == true) ? $value : $this->_invalidMissing_Input($message);
        return $data;
    }

    protected function _requestValidator($val ,$key,$value)
    {
        $rules = [$key=> $value];
        $validator = Validator::make($val, $rules);
        if ($validator->passes()) {
            return  true;
        }else{
            return false;
        }
    }

    protected function _invalidMissing_Input($message){
        $response = array(
            'status' => 'failed',
            'message' => $message,
            'payload' => ''
         );

         echo json_encode($response);
         exit(0);
    }

    protected function _validateInputs($request, $inputs)
    {
        foreach ($inputs as $key => $required) {

            if (!$this->_requestValidator($request->all(), $key, $required)) {
                $this->_throwError('Missing Request Parameter '.$key.', Try Again Later.');
            }
        }
    }

    public function _throwError($message)
    {

        return response()->json(['status' => 'failed','message' => $message,'payload' => ''])->throwResponse();

    }

    protected function _Product($column,$search,$take,$not_like,$product_type,$company=1)
    {
        $res       = array();
        $data = Product::where([['status', 1],['company',$company]])
        ->when($product_type, function ($query) use ($product_type) {
            return $query->where('product_type',$product_type);
        })
        ->when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')->take(1);
        })
        ->when($not_like, function ($query) use ($take,$not_like) {
            return $query->where('name','not like','%'.$not_like.'%')->take($take);
        })
        ->get($column);


        if($data){
            foreach($data as $loop => $datas){
                $selectedData = [];
                foreach ($column as $columns) {
                    if(in_array($columns,['specification','other_img'])){
                        $datas->{$columns} = json_decode($datas->{$columns},true);
                    }
                    $selectedData[$columns] = $datas->{$columns};
                }

                $selectedData['type'] = 'corrugated-carton';
                $res[$loop] = $selectedData;
            }
        }

        return $res;
    }

    protected function _encrypt($data)
    {
        return Crypt::encryptString($data);
    }

    protected function _decrypt($data)
    {
        return Crypt::decryptString($data);
    }

    public function _dateFormatter($date,$format)
    {
        if($date){
            return  Carbon::parse($date)->format($format);
        }else{
            return '--';
        }
    }
}
