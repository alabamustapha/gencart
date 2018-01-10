<?php

namespace App\Listeners;

use App\Events\AccountCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Twilio;
class SendVerificationCode
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
     * @param  AccountCreated  $event
     * @return void
     */
    public function handle(AccountCreated $event)
    {
        Twilio::message("+2348095034525", $event->code);
        info('User login attempt failed.', ['id' => $event->user->phone, 'code' => $event->code ]);
    }
}
