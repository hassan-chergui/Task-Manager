<?php

use App\Http\Controllers\Api\TaskController as ApiTaskController;
use Illuminate\Support\Facades\Route;



Route::apiResource('tasks', ApiTaskController::class);