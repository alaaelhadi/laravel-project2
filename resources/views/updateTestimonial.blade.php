@extends('layouts.admin')
@section('title')
Update Testimonial
@endsection
@section('content')
  <div class="container">
    <h2>Update Testimonial</h2>
    <form action="{{ route('updateTestimonial',$testimonial->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter name" name="name" value="{{ $testimonial->name }}">
        @error('name')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter position" name="position" value="{{ $testimonial->position }}">
        @error('position')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
          <label for="testimony">Testimony:</label>
          <textarea class="form-control" rows="5" id="description" name="testimony">{{ $testimonial->testimony }}</textarea>
          @error('testimony')
          <div class='alert alert-warning'>
            {{ $message }}
          </div>
          @enderror
        </div> 
      <div class="form-group">
        <label for="image">Image:</label>
        <div class="form-group">
          <input type="file" class="form-control" id="image" name="image" value="{{ $testimonial->image }}">
          <img src=" {{ asset('assets/images/'.$testimonial->image) }} " alt="testimonial" style="width:250px;">
        </div>
        @error('image')
          <div class='alert alert-warning'>
            {{ $message }}
          </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-default">Update</button>
    </form>
  </div>
@endsection