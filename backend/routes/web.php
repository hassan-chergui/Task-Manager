<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TaskController::class,'home'] );
Route::get('/about', function(){
    return view('about');
} );
Route::get('/contact', function(){
    return view('contact');
} );

Route::resource('tasks', TaskController::class);