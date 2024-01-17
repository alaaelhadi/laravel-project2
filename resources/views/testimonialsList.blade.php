@extends('layouts.admin')
@section('title')
Testimonials List
@endsection
@section('content')
  <div class="container">
    <h2>Testimonials List</h2>         
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Image</th>
          <th>Show</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($testimonials as $testimonial)
        <tr>
          <td>{{ $testimonial->name }}
          <td>{{ $testimonial->position }}</td>
          <td><img src="{{ asset('assets/images/'.$testimonial->image) }}" width="120px"></td>
          <!-- <td><img src="assets/img/{{ $testimonial->image }}" width="120px"></td> -->
          <td><a href="showTestimonial/{{ $testimonial->id }}">Show</a></td>
          <td><a href="editTestimonial/{{ $testimonial->id }}">Edit</a></td>
          <td><a href="deletetestimonial/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection