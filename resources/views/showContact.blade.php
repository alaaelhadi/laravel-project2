@extends('layouts.admin')
@section('title')
Show Contact
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-dark" style="margin-top: 45px; margin-bottom: 45px; padding: 25px; border-radius:25px; text-align: center">{{$contact->name}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-light bg-secondary" style="padding: 25px; border-radius:25px;">Email:<br>{{$contact->email}}</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <p class="text-light bg-secondary" style="padding: 25px; border-radius:25px;">Subject:<br>{{$contact->subject}}</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <p class="text-light bg-secondary" style="margin-top: 25px; padding: 25px; border-radius:25px;">Message:<br>{{$contact->message}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection