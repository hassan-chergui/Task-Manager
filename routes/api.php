<?php

use App\Http\Controllers\Api\TaskController as ApiTaskController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('tasks', ApiTaskController::class);
});



