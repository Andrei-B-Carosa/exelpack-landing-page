<?php

namespace App\Models\CustomerRequest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestInfo extends Model
{
    use HasFactory;

    protected $fillable =[
        'rq_id',
        'requestor_name',
        'requestor_email',
        'requestor_telephone',
        'requestor_company',
        'requestor_message',
        'company_accreditation',
        'company_address',
        'delivery_id',
    ];
}
