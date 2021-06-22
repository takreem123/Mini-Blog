@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
@foreach ($comments as $comment)
<div class="col-12">
<div class="card">
    <div class="card-body">
      <h5 class="card-title">{{$comment->coment}}</h5>
    </div>
  </div>
</div>
<br>
@endforeach
</div>
</div>
@endsection