@extends('layouts.admin')
@section('title')
Trashed Testimonials List
@endsection
@section('content')
  <div class="container">
    <h2>Trashed Testimonials List</h2>         
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Testimony</th>
          <th>Image</th>
          <th>Restore</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($testimonials as $testimonial)
        <tr>
          <td>{{ $testimonial->name }}
          <td>{{ $testimonial->position }}</td>
          <td>{{ $testimonial->testimony }}</td>
          <td><img src="{{ asset('assets/images/'.$testimonial->image) }}" width="120px"></td>
          <!-- <td><img src="assets/img/{{ $testimonial->image }}" width="120px"></td> -->
          <td><a href="restoreTestimonial/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to restore?')">Restore</a></td>
          <td><a href="finalDeletetestimonial/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection