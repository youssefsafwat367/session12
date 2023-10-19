@extends('adminlte::page')
@section('title', 'Users')
@section('content')
<table class="table">
    <head>
        <tr class="text-center">
            <th>id </th>
            <th>name </th>
            <th>email </th>
            <th>phone</th>
            <th  style="text-indent: -158px">Action</th>
        </tr>
    </head>
    <body>
        @foreach ($users as $user )
            <tr class="text-center">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td> 
                    <div class="row " >
                        <x-delete-button action="{{ route('Users.Delete' , ['id'=>$user->id]) }}" ></x-delete-button> 
                        <a href={{route('Users.edit' , ['id'=> $user->id])}} class = "btn btn-primary ml-2">Update</a>
                    </div>
                </td>


            </tr>
        @endforeach
    </body>
</table>




@endsection

