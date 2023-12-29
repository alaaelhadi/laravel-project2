<!DOCTYPE html>
<html lang="en">
<head>
  <title>Testimonials List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Testimonials List</h2>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Testimony</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($testimonials as $testimonial)
      <tr>
        <td>{{ $testimonial->name }}
        <td>{{ $testimonial->position }}</td>
        <td>{{ $testimonial->testimony }}</td>
        <td><img src="assets/img/{{ $testimonial->image }}" width="120px"></td>
        <td><a href="editTestimonial/{{ $testimonial->id }}">Edit</a></td>
        <td><a href="deletetestimonial/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
