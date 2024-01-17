@extends('layouts.admin')
@section('title')
Update Subject
@endsection
@section('content')
  <div class="container">
    <h2>Update Subject</h2>
    <form action="{{ route('updatesubject',$subject->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter subject" name="class_subject" value="{{ $subject->class_subject }}">
        @error('class_subject')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="min_age">Minimum age:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter minimum age" name="min_age" value="{{ $subject->min_age }}">
        @error('min_age')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="max_age">Maximum age:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter maximum age" name="max_age" value="{{ $subject->max_age }}">
        @error('max_age')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="start_time">Start time:</label>
        <input type="time" class="form-control" id="title" placeholder="Enter start time" name="start_time" value="{{ $subject->start_time }}">
        @error('start_time')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="end_time">End time:</label>
        <input type="time" class="form-control" id="title" placeholder="Enter end time" name="end_time" value="{{ $subject->end_time }}">
        @error('end_time')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter price" name="price" value="{{ $subject->price }}">
        @error('price')
        <div class='alert alert-warning'>
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="capacity">Capacity:</label>
        <input type="number" class="form-control" id="title" placeholder="Enter capacity" name="capacity" value="{{ $subject->capacity }}">
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
          <img src=" {{ asset('assets/images/'.$subject->image) }} " alt="subject" style="width:250px;">
        </div>
        @error('image')
          <div class='alert alert-warning'>
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group">
          <select name="teacher_id">
              @foreach($teachers as $teacher)
              <option value="{{ $teacher->id }}" @selected($teacher->id == $subject->teacher_id)>{{ $teacher->name }}</option>
              @endforeach
          </select>
          @error('teacher_id')
              <div class='alert alert-warning'>
              {{ $message }}
              </div>
          @enderror
      </div>
      <button type="submit" class="btn btn-default">Update</button>
    </form>
  </div>
@endsection