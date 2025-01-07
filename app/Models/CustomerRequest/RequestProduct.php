<?php

namespace App\Models\CustomerRequest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'rq_id' ,
        'product_id',
        'product_name',
        'product_type',
        'specification',
    ];
}
