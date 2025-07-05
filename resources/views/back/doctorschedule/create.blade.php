@extends('template.back')
@section('content')
<h1>{{$doctor->name}}</h1>
<hr>





<form method="POST" action="{{ route('doctorschedule.storeSchedule', $doctor->id) }}" enctype="multipart/form-data">
    @csrf
<div class="form-group">
        <label for="email">Doctor Schedule</label>
        @foreach(['Saturday','Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday'] as $day)
                <div>
                    <label>{{ $day }}</label>
                    <input type="time" step="300" name="start_time[{{ $day }}]" value="{{ old('start_time.'.$day) }}" required>
                    <input type="time" step="300" name="end_time[{{ $day }}]" value="{{ old('end_time.'.$day) }}" required>
                </div>
        @endforeach
</div>


    <button type="submit">Save</button>
</form>
@endsection
