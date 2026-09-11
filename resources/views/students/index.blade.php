@extends('layouts.app')

@section('title', 'Students List')

@section('content')
    <h1>Students</h1>

    @if (session('success'))
        <p class="alert-success">{{ session('success') }}</p>
    @endif

    <table class="students-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form class="student-form" action="{{ route('students.store') }}" method="POST">
        @csrf
        <h2>Add New Student</h2>
        <label>First Name
            <input type="text" name="firstname" required>
        </label>
        <label>Last Name
            <input type="text" name="lastname" required>
        </label>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Age
            <input type="number" name="age" required>
        </label>
        <button type="submit">Add Student</button>
    </form>
@endsection