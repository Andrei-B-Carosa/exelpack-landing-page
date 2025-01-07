<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\CartonInsert;
use App\Models\Exelpack\Products\BubbleSheet;
use App\Models\ExelpackProducts\CorrugatedBox;
use App\Models\Pallet;
use App\Models\Product;
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
        switch($action){

            case 'filter-products':
                $res = $this->filter_products($request);
            break;

            case 'related-product':
                $res = $this->filter_products($request);
            break;

            case 'product-info':
                $res = $this->product_info($request->data3,$request->data4);
            break;

            default:
                $res = false;
            break;

        }
        $data = array('status' => 'success','message' => 'request accepted','payload' => base64_encode(json_encode($res)));
        return json_encode($data);
    }

    public function filter_products($request)
    {

        $data3 = $request->data3;
        $data4 = isset($request->data4) ? $request->data4 :false;
        $data5 = isset($request->data5) ? $request->data5 :false;
        $column = ['name','description','img'];

        switch($data3){
            case 1:
            case 'corrugated carton':
                return $this->_Product($column,false,$data4,$data5,1);
            break;

            case 2:
            case 'foam':
                return $this->_Product($column,false,$data4,$data5,2);
            break;

            case 3:
            case 'bubble sheet':
                return $this->_Product($column,false,$data4,$data5,3);
            break;

            case 4:
            case 'danpla':
                return $this->_Product($column,false,$data4,$data5,4);

            break;

            case 5:
                return $this->_Product($column,false,$data4,$data5,5);
            break;

            default;
                return $this->_Product($column,false,$data4,$data5,false);
            break;
        }

    }

    public function product_info($name,$type=false)
    {
        switch($type){

            case 'corrugated carton':
                return $this->_Product(['name','description','img','specification','customize','other_img','status'],$name,false,false,1);
            break;

            case 'foam':
                return $this->_Product(['name','description','img','specification','customize','other_img','status'],$name,false,false,2);
            break;

            case 'danpla':
                return $this->_Product(['name','description','img','specification','customize','other_img','status'],$name,false,false,3);
            break;

            case 'bubble sheet':
                return $this->_Product(['name','description','img','specification','customize','other_img','status'],$name,false,false,4);
            break;

            case 'other product':
                return $this->_Product(['name','description','img','specification','customize','other_img','status'],$name,false,false,5);
            break;

            default;
                return false;
            break;
        }
    }

}
