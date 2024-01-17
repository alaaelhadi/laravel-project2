@extends('layouts.admin')
@section('title')
Contacts List
@endsection
@section('content')
    <div class="container">
        <h2>Contacts List</h2>         
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td><a href="showContact/{{ $contact->id }}">Show</a></td>
                <td><a href="deleteContact/{{ $contact->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection