@extends('layout.master')
@section('tittle')
Schedule Match
@endsection

@section('body')
@include('navbar.main')

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Match Schedule<span style="  font-size: 20px;"></span></h1></center>

<center>
<table style="    width: 100%;
    border-collapse: collapse">
<tr class="table-success" >
<th style="  background-color: #aaa;
        text-align: left">Match</th>
<th style="  background-color: #aaa;
        text-align: left">Date</th>

<th style="  background-color: #aaa;
        text-align: left">Ground</th>
<th style="  background-color: #aaa;
        text-align: left">Delete</th>

</tr>
@foreach($schedule as $schedule)
<tr>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$schedule->match}}</td>
<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$schedule->date}}</td>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$schedule->ground}}</td>


     

</tr>
@endforeach
</table>
</center>



@endsection