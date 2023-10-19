@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/custom/style.css') }}">
    <div class="d-flex p-2">
        <div class="parent">
            <a href="{{route('View_Users')}}" class="button1">Users</a>
            <a href="{{route('View_Majors')}}" class="button2">Majors</a>
        </div>
        <br>
        <br>
        <div class="parent">
            <a href="{{route('View_Doctors')}}" class="button3">Doctors</a>
            <a href="{{route('View_Bookings')}}" class="button4">Booking</a>
        </div>
        <br>
        <br>
        <div class="parent">
            <a href="{{route('View_Contacts')}}" class="button5">Contacts</a>
        </div>






    </div>

@endsection
