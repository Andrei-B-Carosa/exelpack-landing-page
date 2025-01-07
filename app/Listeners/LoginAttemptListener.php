<?php

namespace App\Listeners;

use App\Models\User\SystemAccess;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginAttemptListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        /**
         * 422=incomplete, 429 = throttled, 401 = login failed, 500 = bad request, 200 = OK
         */

        $array = ['timestamp'=>Carbon::now(),'login_status' =>$event->status];
        $data = json_encode($array);

        if($event->access_type == 'login_details'){
            SystemAccess::create([
                'ip_address' => $event->ip,
                'username' => $event->username,
                'device_details' => json_encode($event->device_details),
                'login_details' =>$data,
                'action' =>1,
            ]);

        }elseif($event->access_type == 'logout_details'){
            SystemAccess::where([['username',$event->username],['logout_details',null],['action',1]])
            ->latest()->first()
            ->update([
                'logout_details'=> $data,
                'action' =>2,
            ]);
        }


    }
}
