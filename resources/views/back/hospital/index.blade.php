@extends('template.back')
@section('content')
<h1>Hospitals</h1>
<hr>
<a href="{{ route('hospital.create') }}" class="btn btn-primary mb-3">Add New Hospital</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Doctor Count</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hospitals as $hospital)
        <tr>
            <td>{{ $hospital->id }}</td>
            <td>{{ $hospital->name }}</td>
            <td>{{ $hospital->address }}</td>
            <td>{{ $hospital->Doctor->count() }}</td>
            <td>
                <a href="{{ route('hospital.edit', $hospital->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('hospital.destroy', $hospital->id) }}" method="POST" style="display:inline;">
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