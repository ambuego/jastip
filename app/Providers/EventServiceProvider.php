<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\EmailCheck' => [
            'App\Listeners\EmailCheckListener',
        ],
        'App\Events\SignUp' => [
            'App\Listeners\SignUpListener',
        ],
        'App\Events\SignIn' => [
            'App\Listeners\SignInListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
