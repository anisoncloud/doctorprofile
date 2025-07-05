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
<form action="">
    <div class="form-group">
        <label for="search">Input Doctor Name</label>
        <input type="text" name="doctorname" id="doctorname" class="form-control" placeholder="Enter Doctor Name" value="{{ request('doctorname') }}">
    </div>
    <div class="form-group">
        <label for="search">Select Department</label>
        <select name="department_id" id="department_id" class="form-control">
            <option value="">All Departments</option>
            @foreach($departments as $department)
            <option value="{{ $department->id }}" {{ request('department_id') == $department->id ? 'selected' : '' }}>{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="search">Select Hospitals</label>
        <select name="hospital_id" id="hospital_id" class="form-control">
            <option value="">All Departments</option>
            @foreach($hospitals as $hospital)
            <option value="{{ $hospital->id }}" {{ request('hospital_id') == $hospital->id ? 'selected' : '' }}>{{ $hospital->name }}</option>
            @endforeach
        </select>
    </div>
        
    <button type="submit" class="btn btn-primary">Search</button>
</form>
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
                <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>  ||  
                <a href="{{ route('doctorschedule.createSchedule', $doctor->id) }}" class="btn btn-warning">Make Schedule</a>  ||  
                <a href="{{ route('doctorschedule.editSchedule', $doctor->id) }}" class="btn btn-warning">Edit Schedule</a>  ||  
                <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
