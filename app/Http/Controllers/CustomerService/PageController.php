<?php

namespace App\Http\Controllers\CustomerService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $url;
    protected $device_details;

    public function __construct(Request $request)
    {
        $this->url = $request->segment(2);
        $this->device_details = $this->_device();
    }

    public function page(Request $request)
    {
        switch($this->url){
            case 'request-quotation-list':
                return view('customer_service.0002');
            break;

            case 'request-quotation-info':
                return view('customer_service.00021');
            break;

            case 'services':
                return view('customer.0004');
            break;

            case 'careers':
                return view('customer.0005');
            break;

            case 'product-info':
                return view('customer.00031');
            break;

            case 'request-quotation':
                return view('customer.00032');
            break;

            case 'services':
                return view('customer.0004');
            break;

            case 'contact-us':
                return view('customer.0007');
            break;


            default:
                return view('customer_service.0001');
            break;

        }
    }
}
