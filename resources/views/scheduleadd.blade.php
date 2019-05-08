@extends('layout.master')
@section('tittle')
Schedule Add
@endsection

@section('body')
@include('navbar.admin')
@include('message')
<center>
<form method="post" action="{{route('store')}}">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Match</label>
    <input type="text" name="match" class="form-control"  placeholder="Enter Match">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" name="date" class="form-control"placeholder="Date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Ground</label>
    <input type="text" name="ground" class="form-control"placeholder="Enter Play Ground">
  </div>


 
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</center>
@endsection