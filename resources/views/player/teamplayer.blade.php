@extends('layout.master')
@section('tittle')
Team Player
@endsection

@section('body')
@include('navbar.main')
@foreach($player->chunk(3) as $playerChunk)
<div class="row">
@foreach($playerChunk as $player)
<div class="col-xs-6 col-md-4">
<div class="thumbnail">
<img src="{{$player->image}}" alt="Boats at Phi Phi, Thailand">
<div class="caption">
<h3>{{$player->name}}</h3>
<p class="description">{{$player->email}}</p>
<div class="clearfix">
<div class="pull-left price">{{$player->contact}}</div>

</div>
</div>
</div>
</div>
@endforeach
</div>
@endforeach
@endsection