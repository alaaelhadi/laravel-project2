@extends('layouts.admin')
@section('title')
Trashed Subjects List
@endsection
@section('content')
  <div class="container">
    <h2>Trashed Subjects List</h2>         
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Subject name</th>
          <th>Minimum age</th>
          <th>Maximum age</th>
          <th>Start time</th>
          <th>End time</th>
          <th>Price</th>
          <th>Capacity</th>
          <th>Teacher name</th>
          <th>Image</th>
          <th>Restore</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($subjects as $subject)
        <tr>
          <td>{{ $subject->class_subject }}
          <td>{{ $subject->min_age }}</td>
          <td>{{ $subject->max_age }}</td>
          <td>{{ $subject->start_time }}</td>
          <td>{{ $subject->end_time }}</td>
          <td>{{ $subject->price }}</td>
          <td>{{ $subject->capacity }}</td>
          <td>{{ $subject->teacher->name }}</td>
          <td><img src="{{ asset('assets/images/'.$subject->image) }}" width="120px"></td>
          <!-- <td><img src="assets/img/{{ $subject->image }}" width="120px"></td> -->
          <td><a href="restoreSubject/{{ $subject->id }}" onclick="return confirm('Are you sure you want to restore?')">Restore</a></td>
          <td><a href="finalDeleteSubject/{{ $subject->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection