@extends('template.back')
@section('content')
<h1>Doctors</h1>
<hr>
<a href="{{ route('doctor.create') }}" class="btn btn-primary mb-3">Create Doctor</a>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
        <tr>
            <td>{{ $doctor->id }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->department ? $doctor->department->department_name : 'N/A' }}</td>
            <td>
                <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('doctorschedule.create', ['doctorId'=>$doctor->id]) }}" class="btn btn-warning">Make Schedule</a>
                <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
