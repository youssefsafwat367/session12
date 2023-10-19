@extends('adminlte::page')
@section('title', 'Majors')
@section('content')
    @if (session('success') != null)
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('danger') != null)
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif
    
    <table class="table">

        <head>
            <tr class="text-center">
                <th>id </th>
                <th>Title </th>
                <th>Image </th>
                <th style="text-indent: -358px">Action</th>
            </tr>
        </head>

        <body>
            @foreach ($majors as $major)
                <tr class="text-center">
                    <td>{{ $major->id }}</td>
                    <td>{{ $major->title }}</td>
                    <td><img src="{{ asset('uploads') }}/{{ $major->image }}" alt="" alt="example placeholder"
                            style="width: 100px;"> </td>
                    <td>
                        <div class="row ">
                            <x-delete-button action="{{ route('majors.Delete', ['id' => $major->id]) }}"></x-delete-button>
                            <a href={{ route('majors.edit', ['id' => $major->id]) }}
                                class = "btn btn-primary ml-2">Update</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>




@endsection
