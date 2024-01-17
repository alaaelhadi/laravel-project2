@extends('layouts.admin')
@section('title')
Appointments List
@endsection
@section('content')
    <div class="container">
        <h2>Appointments List</h2>         
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Gurdian Name</th>
                <th>Gurdian Email</th>
                <th>Student Name</th>
                <th>Student Age</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->gurdian_name }}
                <td>{{ $appointment->gurdian_email }}</td>
                <td>{{ $appointment->student_name }}</td>
                <td>{{ $appointment->student_age }}</td>
                <td><a href="showAppointment/{{ $appointment->id }}">Show</a></td>
                <td><a href="deleteAppointment/{{ $appointment->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection