<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
// use Illuminate\Support\Facades\Log;
use App\Events\TaskCreated;
use App\Jobs\SendTaskNotification;

class SendTaskNotificationListener
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
    public function handle(TaskCreated $event): void
    {

        // Log::info("Task created: " . $event->task->title);
        // dd('listener ejecutado');
        SendTaskNotification::dispatch($event->task);
    }
}
