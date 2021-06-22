@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
@foreach ($posts as $post)
<div class="col-12">
<div class="card">
    <img src="{{asset('storage/'.$post->thumbnail)}}" class="card-img-top img img-rounded" style="height: 300px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
      <a href="{{url('post/'.$post->id)}}" >Comment</a>
      <a href="{{url('comments/'.$post->id)}}" class="ml-5">View All Comments</a>
 
    </div>
  </div>
</div>
<br>
@endforeach
</div>
</div>
@endsection
