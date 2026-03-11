<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::where('tenant_id', currentTenant()->id)->get();
    }

    public function store()
    {
        $task = Task::create([
            'title' => $request->title
        ]);

        event(new TaskCreated($task));

        return response()->json($task, 201);
    }
}
