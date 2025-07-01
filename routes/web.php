<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('department', DepartmentController::class);
Route::resource('doctor', DoctorController::class);

