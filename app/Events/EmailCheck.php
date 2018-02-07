<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmailCheck
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $email;
    public $password;
    public $fullname;
    public $phone;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email, $password, $fullname, $phone)
    {
        $this->$email = $email;
        $this->$password = $password;
        $this->$fullname = $fullname;
        $this->$phone = $phone;

        Log::info('[EVENT] EmailCheck');    
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
