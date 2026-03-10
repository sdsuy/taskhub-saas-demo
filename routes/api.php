<?php

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);