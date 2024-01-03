<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Teacher</h2>
  <form action="{{ route('teacher') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Teacher name:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter teacher name" name="name" value="{{ old('name') }}">
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
      <label for="facebook">Facebook:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter facebook" name="fb" value="{{ old('fb') }}">
      @error('fb')
      <div class='alert alert-warning'>
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="twitter">X:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter twitter" name="x" value="{{ old('x') }}">
      @error('x')
      <div class='alert alert-warning'>
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter instagram" name="insta" value="{{ old('insta') }}">
      @error('insta')
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

</body>
</html>