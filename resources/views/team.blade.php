@extends('layout.master')
@section('tittle')
Team Player
@endsection


@section('body')
@include('navbar.admin')

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Team Player<span style="  font-size: 20px;"></span></h1></center>

<center>
<table style="    width: 100%;
    border-collapse: collapse">
<tr class="table-success" >

<th style="  background-color: #aaa;
        text-align: left">Name</th>
        <th style="  background-color: #aaa;
        text-align: left">Contact</th>
<th style="  background-color: #aaa;
        text-align: left">Email</th>

</tr>
</tr>
@foreach($player as $player)
<tr>


<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$player->name}}</td>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$player->contact}}</td>
        <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$player->email}}</td>

</tr>
@endforeach
</table>
</center>



@endsection