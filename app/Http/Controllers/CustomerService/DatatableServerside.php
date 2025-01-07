<?php

namespace App\Http\Controllers\CustomerService;

use App\Http\Controllers\Controller;
use App\Models\CustomerRequest\RequestQuotation;
use Illuminate\Http\Request;
use DataTables;

class DatatableServerside extends Controller
{
    public function dt_all_requests_quotation(Request $request)
    {
        $filterBy  = $request->input('filter_by');
        $product_type  = $request->input('product_type');
        $request_type  = $request->input('request_type');

        $all_requests = RequestQuotation::with([
            'rq_status:id,rq_id,request_status',
            'rq_info:id,rq_id,requestor_name,requestor_email,requestor_company,company_accreditation',
            'rq_product:id,rq_id,product_name,product_type,estimated_price,specification'
        ])
        ->when($filterBy, function ($query) use($filterBy) {
            return $query->whereHas('rq_status', function ($query) use($filterBy) {
                $query->where('request_status', $filterBy);
            });
        })
        ->when($product_type, function ($query) use($product_type) {
            return $query->whereHas('rq_product', function ($query) use($product_type) {
                $query->where('product_type', $product_type);
            });
        })
        ->when($request_type, function ($query) use($request_type) {
            return $query->where('request_type',$request_type);
         })
         ->select([
            'id',
            'request_no',

        ]);


        return DataTables::eloquent($all_requests)
        ->addColumn('action', function ($quotation_list) {
            return $this->_encrypt($quotation_list->id);
        })
        ->addColumn('quantity', function ($quotation_list) {
            $spec = $quotation_list->rq_product->specification;
            $parseSpecs = json_decode($spec);
            return $parseSpecs->quantity.'X';
        })
        ->addColumn('processed_by', function ($quotation_list) {
            if($quotation_list->processed_by){
                return $quotation_list->rq_processed_by_info->fullname;
            }else{
                return '--';
            }
        })
        ->addColumn('processed_by_role', function ($quotation_list) {
            $role_id = $quotation_list->rq_processed_by_role->role_id;
            if($role_id){
                if($role_id == 1){
                    return 'CUSTOMER SERVICE';
                }elseif($role_id == 2){
                    return 'MANAGER';
                }
            }else{
                return '--';
            }
        })
        ->editColumn('created_at', function ($quotation_list) {
            return $this->_dateFormatter($quotation_list->created_at,'M-d-Y');
        })
        ->make(true);
    }
}
