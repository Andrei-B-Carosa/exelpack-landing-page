<?php

namespace App\Models\CustomerRequest;

use App\Models\User\Employee;
use App\Models\User\EmployeeRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\RequestStack;

class RequestQuotation extends Model
{
    use HasFactory;

    protected $fillable =[
        'request_no',
        'ip_address',
        'email_status',
        'date_emailed',
        'processed_by',
        'request_type'
    ];

    public function rq_status(){
        return $this->hasOne(RequestStatus::class,'rq_id');
    }

    public function rq_info(){
        return $this->hasOne(RequestInfo::class,'rq_id');
    }

    public function rq_product(){
        return $this->hasOne(RequestProduct::class,'rq_id');
    }

    public function rq_processed_by_role(){
        return $this->belongsTo(EmployeeRole::class,'processed_by','personnel_id')->withDefault();
    }

    public function rq_processed_by_info(){
        return $this->belongsTo(Employee::class,'processed_by')->withDefault();
    }
}
