@extends('layout/layout')

@section('content')
 

<div class="container mt-5">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <h2 class="text-center">User Login</h2>
    <form method="POST" action="{{route('userlogin')}}">
        @csrf
        <div class="row col-md-6 mx-auto" >
          
            <div class="col-md-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
           
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Log In</button>
        </div>
      
    </form>
</div>



@endsection
