<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return response()->json($task, 201);
    }
}
