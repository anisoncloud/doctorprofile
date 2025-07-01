<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('hospital.index') }}">Hospitals</a></li>
            <li><a href="{{ route('department.index') }}">Departments</a></li>
            <li><a href="{{ route('doctor.index') }}">Doctors</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>