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
    public function create()
    {
        //
    }

    public function createSchedule($doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);
        return view('back.doctorschedule.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function storeSchedule(Request $request, $doctorId)
    {
        //dd($request->all(), $doctorId);
        $doctor = Doctor::findOrFail($doctorId);

    $days = ['Saturday','Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday'];

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

    public function editSchedule($doctorId)
    {
        $doctor = Doctor::with('weeklySchedules')->findOrFail($doctorId);
        //dd($doctor);
        $days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $schedule=[];
        foreach($days as $day){
            $daySchedule = $doctor->weeklySchedules->where('day_of_week', $day)->first();
            $schedule[$day] = [
                'start_time' => $daySchedule ? $daySchedule->start_time : null,
                'end_time' => $daySchedule ? $daySchedule->end_time : null
            ];
        }
        // if ($schedule->isEmpty()) {
        //     return redirect()->back()->with('error', 'No schedule found for this doctor.');
        // }

        return view('back.doctorschedule.edit', compact('doctor', 'schedule'));
    }


    
    /**
     * Display the specified resource.
     */
    public function updateSchedule(Request $request, $doctorId)
    {
    $doctor = Doctor::findOrFail($doctorId);
    $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    foreach ($days as $day) {
        $start = $request->start_time[$day] ?? null;
        $end = $request->end_time[$day] ?? null;

        if ($start && $end) {
            DoctorWeeklySchedule::updateOrCreate(
                ['doctor_id' => $doctor->id, 'day_of_week' => $day],
                ['start_time' => $start, 'end_time' => $end]
            );
        } else {
            // If inputs are empty, delete that day's schedule
            DoctorWeeklySchedule::where('doctor_id', $doctor->id)
                ->where('day_of_week', $day)
                ->delete();
        }
    }

    return back()->with('success', 'Schedule updated successfully.');
    }

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
