@extends('adminlte::page')
@section('title', 'User')
@section('content')
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    
    <form action="{{route('Users.update' , ['id'=>$user->id])}}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="well profile">
                    <br>
                    <h3 class="name pull-left clearfix"> Welcome {{$user->name}}</h3>
                <div class="clearfix"></div>
                <ul class="nav nav-tabs">
                    <li class="">
                        <a href="#tab2" data-toggle="tab">
                        	Overview
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="basic">
                                        <form class="form-horizontal" role="form" action="{{route('Users.update' , ['id'=> $user->id])}}" method="POST">
                                            @csrf 
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="inputfullname" class="col-lg-2 control-label">Name</label>
                                                <div class="col-lg-15">
                                                    <input type="text" class="form-control" id="inputfullname" placeholder="UserName" value="{{$user->name}}" name="name">
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                  </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputemail" class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-15">
                                                    <input type="email" class="form-control" id="inputemail" placeholder="Email" value="{{$user->email}}" name="email">
                                                </div>
                                                @error('email')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                  </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputpassword" class="col-lg-2 control-label">Password</label>
                                                <div class="col-lg-15">
                                                    <input type="password" class="form-control" id="inputpassword" placeholder="Password" name="password">
                                                </div>
                                                @error('password')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                  </div>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="phone" class="col-lg-2 control-label">phone</label>
                                                    <div class="col-lg-15">
                                                        <input type="number" class="form-control" id="phone" placeholder="Phone"value="{{$user->phone}}"  name="phone" >
                                                    </div>
                                                    @error('phone')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{$message}}
                                                      </div>
                                                    @enderror
                                               
                                                        <div class="text-center">
                                                            <br>
                                                            <input type="submit" class="btn btn-primary" value="Update ">
                                                          </div>
    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form >
</div>      


@endsection
