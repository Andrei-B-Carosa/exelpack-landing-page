<?php

namespace App\Models\CustomerRequest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestStatus extends Model
{
    use HasFactory;
    protected $table = 'request_status';
    protected $fillable = [
        'rq_id',
        'request_status',
    ];
}
