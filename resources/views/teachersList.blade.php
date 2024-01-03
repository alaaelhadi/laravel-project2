<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teachers List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

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

</body>
</html>