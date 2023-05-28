<?php

namespace VI\LaravelLogWatcher\Listeners;

use Illuminate\Log\Events\MessageLogged;
use VI\LaravelLogWatcher\Logging\SQLightLogger;

class LogMessageListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        // ...
    }

    /**
     * Handle the event.
     */
    public function handle(MessageLogged $event): void
    {

        (new SQLightLogger())->{$event->level}($event->message, $event->context);

    }
}

