<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Events\TaskCreated;

class TaskController extends Controller
{
    public function index()
    {
        return Task::where('tenant_id', currentTenant()->id)->get();
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title
        ]);

        // dd('evento disparado');

        event(new TaskCreated($task));

        return response()->json($task, 201);
        // return $task;
    }
}
