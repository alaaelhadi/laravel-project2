@extends('layouts.admin')
@section('title')
Add Testimonial
@endsection
@section('content')
  <div class="container">
    <h2>Add Testimonial</h2>
    <form action="{{ route('testimony') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter position" name="position" value="{{ old('position') }}">
        @error('position')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
          <label for="testimony">Testimony:</label>
          <textarea class="form-control" rows="5" id="description" name="testimony">{{ old('testimony') }}</textarea>
          @error('testimony')
          <div class='alert alert-warning'>
            {{ $message }}
          </div>
          @enderror
        </div> 
      <div class="form-group">
        <label for="image">Image:</label>
        <div class="form-group">
          <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
        </div>
        @error('image')
          <div class='alert alert-warning'>
            {{ $message }}
          </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-default">Add</button>
    </form>
  </div>
@endsection