<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use App\Models\Task;

class SendTaskNotification implements ShouldQueue
{
    use Queueable;

    // public $tries = 1;
    public Task $task;

    /**
     * Create a new job instance.
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // dd('job ejecutado');
        Log::info("Task created: " . $this->task->title);
    }
}
