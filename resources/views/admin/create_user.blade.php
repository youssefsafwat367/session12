@extends('adminlte::page')
@section('title', 'User')
@section('content')
<br>
  <div class="mask d-flex align-items-center h-90 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-3">Create An User</h2>        
              <form  action="{{route('Users.store')}}" method="POST">
                @csrf
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example1cg">User Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="name"/>
                </div>
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example3cg">User Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"/>
                </div>
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"/>
                </div>
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4cdg">Phone</label>
                  <input type="number" id="form3Example4cdg" class="form-control form-control-lg" name="phone"/>
                </div>
                @error('phone')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                <div class="d-flex justify-content-center">
                  <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
