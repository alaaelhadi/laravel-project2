@extends('layouts.admin')
@section('title')
Update Teacher
@endsection
@section('content')
  <div class="container">
    <h2>Update Teacher</h2>
    <form action="{{ route('updateteacher', $teacher->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="name">Teacher name:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter teacher name" name="name" value="{{ $teacher->name }}">
        @error('name')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter position" name="position" value="{{ $teacher->position }}">
        @error('position')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="facebook">Facebook:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter facebook" name="fb" value="{{ $teacher->fb }}">
        @error('fb')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="twitter">X:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter twitter" name="x" value="{{ $teacher->x }}">
        @error('x')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="instagram">Instagram:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter instagram" name="insta" value="{{ $teacher->insta }}">
        @error('insta')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="image">Image:</label>
        <div class="form-group">
          <input type="file" class="form-control" id="image" name="image" value="{{ $teacher->image }}">
          <img src=" {{ asset('assets/images/'.$teacher->image) }} " alt="subject" style="width:250px;">
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