<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalControllar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('department', DepartmentController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('hospital', HospitalControllar::class);

