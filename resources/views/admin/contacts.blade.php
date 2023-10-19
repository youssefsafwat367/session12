@extends('adminlte::page')
@section('title', 'Contacts')
@section('content')
@if (session('danger')!=NULL)
<div class="alert alert-danger" role="alert">
    {{session('danger')}}
@endif
  </div>
<table class="table">
    <head>
        <tr class="text-center">
            <th>id    </th>
            <th>Name  </th>
            <th>Email </th>
            <th>Subject </th>
            <th>Message   </th>
            <th  style="text-indent: -107px">Action</th>
        </tr>
    </head>
    <body>
        @foreach ($contacts as $contact )
            <tr class="text-center">
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message}}</td>
                <td> 
                    <div class="row ">
                        <x-delete-button action="{{ route('contacts.delete' , ['id'=>$contact->id])}}" ></x-delete-button> 
                    </div>
                </td>
            </tr>
        @endforeach
    </body>
</table>
@endsection

