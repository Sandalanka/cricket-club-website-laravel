@extends('layout.master')
@section('tittle')
Admin Login
@endsection

@section('body')
@include('navbar.main')
@include('message')
<form method="POST" action="{{route('adminlogin')}}">
  <center><h1>Admin Login</h1></center>
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"name="password" class="form-control"  placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection