@extends('template.back')
@section('content')
<h1>Doctors Create</h1>
<hr>
<form method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="hospital">Hospital Name</label>
        <select name="hospital_id" id="">
                <option value="">Select Hospital</option>
                @foreach ($hospitals as $hospital)
                <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="specialization">Department</label>
            <select name="department_id" id="">
                <option value="">Select Department</option>
                @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="name">Speciality</label>
        <input type="text" class="form-control" id="speciality" name="speciality" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Doctor</button>

</form>

@endsection
