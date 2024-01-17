@extends('layouts.admin')
@section('title')
Trashed Contacts List
@endsection
@section('content')
  <div class="container">
    <h2>Trashed Contacts List</h2>         
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Restore</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contacts as $contact)
        <tr>
          <td>{{ $contact->name }}
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->subject }}</td>
          <td><a href="restoreContact/{{ $contact->id }}" onclick="return confirm('Are you sure you want to restore?')">Restore</a></td>
          <td><a href="finalDeleteContact/{{ $contact->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection