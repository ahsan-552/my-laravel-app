<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Ye home page ke liye hai
Route::get('/', function () {
    return view('welcome');
});

// Ye CRUD ke liye hai (Isko hamesha bahar rakhen)
Route::resource('students', StudentController::class);