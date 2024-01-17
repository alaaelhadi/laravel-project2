@extends('layouts.admin')
@section('title')
Trashed Appointments List
@endsection
@section('content')
  <div class="container">
    <h2>Trashed Appointments List</h2>         
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Gurdian Name</th>
          <th>Gurdian Email</th>
          <th>Student Name</th>
          <th>Student Age</th>
          <th>Restore</th>
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
          <td><a href="restoreAppointment/{{ $appointment->id }}" onclick="return confirm('Are you sure you want to restore?')">Restore</a></td>
          <td><a href="finalDeleteAppointment/{{ $appointment->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection