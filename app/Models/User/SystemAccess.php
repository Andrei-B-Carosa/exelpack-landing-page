<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemAccess extends Model
{
    use HasFactory;

    protected $table ='system_access_logs';
    protected $fillable = [
        'ip_address',
        'username',
        'device_details',
        'login_details',
        'logout_details',
        'action',
    ];
}
