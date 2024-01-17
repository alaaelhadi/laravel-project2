@extends('layouts.admin')
@section('title')
Teachers List
@endsection
@section('content')
  <div class="container">
    <h2>Teachers List</h2>         
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Teacher name</th>
          <th>Position</th>
          <th>Facebook</th>
          <th>Twitter</th>
          <th>Instagram</th>
          <th>Image</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($teachers as $teacher)
        <tr>
          <td>{{ $teacher->name }}
          <td>{{ $teacher->position }}</td>
          <td>{{ $teacher->fb }}</td>
          <td>{{ $teacher->x }}</td>
          <td>{{ $teacher->insta }}</td>
          <td><img src="{{ asset('assets/images/'.$teacher->image) }}" width="120px"></td>
          <!-- <td><img src="assets/img/{{ $teacher->image }}" width="120px"></td> -->
          <td><a href="editTeacher/{{ $teacher->id }}">Edit</a></td>
          <td><a href="deleteTeacher/{{ $teacher->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection