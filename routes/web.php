<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\HospitalControllar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('department', DepartmentController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('hospital', HospitalControllar::class);
Route::resource('doctorschedule', DoctorScheduleController::class);
Route::get('doctorschedule/createSchedule/{doctorId}', [DoctorScheduleController::class, 'createSchedule'])->name('doctorschedule.createSchedule');
Route::post('doctorschedule/storeSchedule/{doctorId}', [DoctorScheduleController::class, 'storeSchedule'])->name('doctorschedule.storeSchedule');
Route::get('doctorschedule/eidtSchedule/{doctorId}', [DoctorScheduleController::class, 'editSchedule'])->name('doctorschedule.editSchedule');
Route::put('doctorschedule/updateSchedule/{doctorId}', [DoctorScheduleController::class, 'updateSchedule'])->name('doctorschedule.updateSchedule');

