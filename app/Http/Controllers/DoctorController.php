<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('back.doctor.index', [
            'doctors' => Doctor::with('department')->get(),
            'departments' => Department::all(),
            'hospitals' => Hospital::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('back.doctor.create', [
            'departments' => Department::all(),
            'hospitals' => Hospital::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email',
            'department_id' => 'required|exists:departments,id',
            'hospital_id' => 'required|exists:hospitals,id'
        ]);
        //dd($request->all());
        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'department_id' => $request->department_id,
            'hospital_id' => $request->hospital_id
        ]);
        return redirect()->route('doctor.index')->with('success', 'Doctor created successfully.');
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
