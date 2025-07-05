@extends('template.back')
@section('content')
<h1>{{$doctor->name}}</h1>
<h3>Edit Doctor Schedule</h3>
<hr>

<form method="POST" action="{{ route('doctorschedule.updateSchedule', $doctor->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="form-group">
        <label for="email">Doctor Schedule</label>
        @foreach(['Saturday','Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday'] as $day)
                <div>
                    <label>{{ $day }}</label>
                    <input type="time" step="300" name="start_time[{{ $day }}]" value="{{ old('start_time.'.$day, $schedule[$day]['start_time'])  }}">
                    <input type="time" step="300" name="end_time[{{ $day }}]" value="{{ old('end_time.'.$day, $schedule[$day]['end_time']) }}">
                </div>
        @endforeach
</div>


    <button type="submit">Save</button>
</form>
@endsection