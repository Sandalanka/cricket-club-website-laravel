@extends('layout.master')
@section('tittle')
Match Result
@endsection

@section('body')
@include('navbar.main')

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Match Result<span style="  font-size: 20px;"></span></h1></center>

<center>
<table style="    width: 100%;
    border-collapse: collapse">
<tr class="table-success" >
<th style="  background-color: #aaa;
        text-align: left">Match</th>
<th style="  background-color: #aaa;
        text-align: left">Date</th>

<th style="  background-color: #aaa;
        text-align: left">Result</th>


</tr>
@foreach($result as$result)
<tr>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$result->match}}</td>
<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$result->date}}</td>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$result->result}}</td>



</tr>
@endforeach
</table>
</center>



@endsection