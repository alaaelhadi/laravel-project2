@extends('layouts.admin')
@section('title')
Add Subject
@endsection
@section('content')
  <div class="container">
    <h2>Add Subject</h2>
    <form action="{{ route('subject') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Subject:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter subject" name="class_subject" value="{{ old('class_subject') }}">
        @error('class_subject')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Minimum age:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter minimum age" name="min_age" value="{{ old('min_age') }}">
        @error('min_age')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Maximum age:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter maximum age" name="max_age" value="{{ old('max_age') }}">
        @error('max_age')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Start time:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter start time" name="start_time" value="{{ old('start_time') }}">
        @error('start_time')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">End time:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter end time" name="end_time" value="{{ old('end_time') }}">
        @error('end_time')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Price:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter price" name="price" value="{{ old('price') }}">
        @error('price')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="position">Capacity:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter capacity" name="capacity" value="{{ old('capacity') }}">
        @error('capacity')
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
      <div class="form-group">
          <select name="teacher_id">
              <option value="">Select Teacher</option>
              @foreach($teachers as $teacher)
              <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
              @endforeach
          </select>
          @error('teacher_id')
              <div class='alert alert-warning'>
              {{ $message }}
              </div>
          @enderror
      </div>
      <button type="submit" class="btn btn-default">Add</button>
    </form>
  </div>
@endsection