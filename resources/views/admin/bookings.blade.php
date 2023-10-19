@extends('adminlte::page')
@section('title', 'Booking')
@section('content')
    @if (session('success') != null)
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
    @endif
    @if (session('danger') != null)
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
    @endif
    </div>
    <table class="table">

        <head>
            <tr class="text-center">
                <th>Id </th>
                <th>Name </th>
                <th>Email </th>
                <th>Phone </th>
                <th>Doctor Name </th>
                <th>Date </th>
                <th>Status </th>
                <th style="text-indent: -107px">Action</th>
            </tr>
        </head>

        <body>
            @foreach ($bookings as $booking)
                <tr class="text-center">
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->doctor()->get()[0]->name }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <div class="row ">
                            <a href={{ route('bookings.edit', ['id' => $booking->id, 'status' => 'confirmed']) }}
                                class = "btn btn-primary ml-2">Confirm</a>
                            <a href={{ route('bookings.edit', ['id' => $booking->id, 'status' => 'rejected']) }}
                                class = "btn btn-danger ml-2">Reject</a>
                        <x-delete-button action="{{ route('bookings.delete' , ['id'=>$booking->id])}}" ></x-delete-button>

                        </div>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
@endsection
