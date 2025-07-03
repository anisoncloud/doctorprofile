<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorWeeklySchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        return view('back.doctorschedule.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);

    $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    foreach ($days as $day) {
        if ($request->start_time[$day] && $request->end_time[$day]) {
            DoctorWeeklySchedule::updateOrCreate(
                ['doctor_id' => $doctor->id, 'day_of_week' => $day],
                [
                    'start_time' => $request->start_time[$day],
                    'end_time'   => $request->end_time[$day]
                ]
            );
        }
    }
    return back()->with('success', 'Weekly schedule updated.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
