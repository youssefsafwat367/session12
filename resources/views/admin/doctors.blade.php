@extends('adminlte::page')
@section('title', 'Doctors')
@section('content')
@if (session('success')!=NULL)
<div class="alert alert-success" role="alert">
    {{session('success')}}
@endif
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
            <th>Major </th>
            <th>Image </th>
            <th>Bio   </th>
            <th  style="text-indent: -220px">Action</th>
        </tr>
    </head>
    <body>
        @foreach ($doctors as $doctor )
            <tr class="text-center">
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                @foreach ($doctor->major()->get() as $major)
                <td>{{ $major->title}}</td>
                @endforeach
                <td><img src="{{ asset("uploads")}}/{{$doctor->image}}" alt=""  alt="example placeholder" style="width: 100px;"> </td>
                <td>{{ $doctor->bio}}</td>
                <td> 
                    <div class="row ">
                        <x-delete-button action="{{ route('doctors.delete' , ['id'=>$doctor->id])}}" ></x-delete-button> 
                        <a href={{route('doctors.edit' , ['id'=> $doctor->id])}} class = "btn btn-primary ml-2">Update</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </body>
</table>


@endsection

