<?php

namespace App\Listeners;

use App\Events\SignIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignInListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SignIn  $event
     * @return void
     */
    public function handle(SignIn $event)
    {
        //
    }
}
