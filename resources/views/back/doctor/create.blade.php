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
    <div class="form-group">
        <label for="sunday">Sunday</label>
            <select name="sunday_start" id="">
                <option value="8AM">8AM</option>
                <option value="9AM">9AM</option>
                <option value="10AM">10AM</option>
                <option value="11AM">11AM</option>
                <option value="12AM">12AM</option>
                <option value="01PM">01PM</option>
                <option value="02PM">02PM</option>
                <option value="03PM">03PM</option>
                <option value="04PM">04PM</option>
                <option value="05PM">05PM</option>
                <option value="06PM">06PM</option>
                <option value="07PM">07PM</option>
                <option value="08PM">08PM</option>
                <option value="09PM">09PM</option>
                <option value="10PM">10PM</option>
                <option value="11PM">11PM</option>
                <option value="12PM">12PM</option>
            </select>
    </div>
<select name="day_of_week">
        @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
            <option value="{{ $day }}">{{ $day }}</option>
        @endforeach
    </select>

    <input type="time" name="start_time">
    <input type="time" name="end_time">
    <select name="day_of_week">
        @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
            <option value="{{ $day }}">{{ $day }}</option>
        @endforeach
    </select>

    <input type="time" name="start_time">
    <input type="time" name="end_time">
    <select name="day_of_week">
        @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
            <option value="{{ $day }}">{{ $day }}</option>
        @endforeach
    </select>

    <input type="time" name="start_time">
    <input type="time" name="end_time">
    <select name="day_of_week">
        @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
            <option value="{{ $day }}">{{ $day }}</option>
        @endforeach
    </select>

    <input type="time" name="start_time">
    <input type="time" name="end_time">
    <button type="submit" class="btn btn-primary">Create Doctor</button>

</form>
@endsection
