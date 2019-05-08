@extends('layout.master')
@section('tittle')
Match Result
@endsection

@section('body')
@include('navbar.admin')

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Match Result<span style="  font-size: 20px;"><a href="{{route('addresult')}}">+Add result</a></span></h1></center>

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
<th style="  background-color: #aaa;
        text-align: left">Delete</th>

</tr>
@foreach($result as$result)
<tr>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$result->match}}</td>
<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$result->date}}</td>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$result->result}}</td>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;"><a href="{{route('deleteresult',['id'=>$result->id])}}">Delete</a></td>

</tr>
@endforeach
</table>
</center>



@endsection