@extends('layout.master')
@section('tittle')
Feedback
@endsection



@section('body')
@include('navbar.main')


<section class="row new-post">
<div class="col-md-6 col-md-offset-3">
<header>
<h1>What are You Saying</h1>
</header>
<form action="{{route('post')}}" method="POST">
    {{csrf_field()}}
<label for="">Name</label>
<input type="text" name="name">
<div class="form-group">
<textarea class="form-control"name="body"  rows="10" placeholder="What are you saying">
</textarea>

</div>
<button type="submit" class="btn btn-primary">Create post</button>

</form>
</div></section>
<section class="row posts">

<div class="col-md-6 ">
<header><h3>What other say</h3></header>
@foreach($post as $post)

<article class="post">
<p>{{$post->body}}</p>
<div class="info">
Post by {{$post->name}}  On {{$post->created_at}}</div>

</article>
@endforeach
</div>
</section>

@endsection