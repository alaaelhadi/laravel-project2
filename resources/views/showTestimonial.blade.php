@extends('layouts.admin')
@section('title')
Show Appointment
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-dark" style="margin-top: 45px; margin-bottom: 45px; padding: 25px; border-radius:25px; text-align: center">{{$testimonial->name}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/'.$testimonial->image)}}" style="border-radius:50px; margin-left: 180px;" alt="{{$testimonial->name}}" width="50%">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <p class="text-light bg-secondary" style="margin-top: 25px; padding: 25px; border-radius:25px;">Position:<br>{{$testimonial->position}}</p>
                    <p class="text-light bg-secondary" style="margin-top: 25px; padding: 25px; border-radius:25px;">Testimony:<br>{{$testimonial->testimony}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection