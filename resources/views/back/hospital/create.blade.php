@extends('template.back')
@section('content')
<h1>Create Hospital</h1>
<hr>
<form action="{{route('hospital.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Hospital Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">   
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    
    <button type="submit">Save</button>
    
</form>
@endsection