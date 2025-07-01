@extends('template.back')
@section('content')
<h1>Create</h1>
<hr>
<form action="{{ route('department.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="department_name" id="department_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
@endsection
