<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $url;
    protected $device_details;

    public function __construct(Request $request)
    {
        $this->url = $request->segment(1);
        $this->device_details = $this->_device();
    }

    public function page(Request $request){

        switch($this->url){

            case 'about-us':
                return view('customer.0002');
            break;

            case 'products':
                return view('customer.0003');
            break;

            case 'services':
                return view('customer.0004');
            break;

            case 'careers':
                return view('customer.0005');
            break;

            case 'activities':
                return view('customer.0006');
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
                return view('customer.0001');
            break;

        }

    }

}
