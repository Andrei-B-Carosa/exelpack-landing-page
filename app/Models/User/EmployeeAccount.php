<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EmployeeAccount extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getCheckAccountAttribute(){
        if($this->role == 1){
            return 'Customer Service';
        }elseif($this->role == 2){
            return 'Manager';
        }else{
            return '--';
        }
    }

    public function employee_info(){
        return $this->belongsTo(Employee::class,'personnel_id');
    }

    public function employee_role(){
        return $this->belongsTo(EmployeeRole::class,'personnel_id');
    }
}
