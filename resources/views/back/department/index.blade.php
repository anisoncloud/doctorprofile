@extends('template.back')
@section('content')
<h1>Department</h1>
<hr>
<a href="{{ route('department.create') }}" class="btn btn-primary mb-3">Create Department</a>
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
            <th>Description</th>
            <th>Doctors Count</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $department->id }}</td>
            <td>{{ $department->department_name }}</td>
            <td>{{ $department->description }}</td>
            <td>{{ $department->Doctor->count() }}</td>
            <td>
                <a href="{{ route('department.edit', $department->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('department.destroy', $department->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <thead>
@endsection
