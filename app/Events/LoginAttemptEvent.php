<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LoginAttemptEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;
    public $device_details;
    public $status;
    public $ip;
    public $access_type;

    /**
     * Create a new event instance.
     */

    public function __construct($username,$ip,$status,$device_details,$access_type)
    {
        $this->username = $username;
        $this->ip = $ip;
        $this->status = $status;
        $this->device_details = $device_details;
        $this->access_type = $access_type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
