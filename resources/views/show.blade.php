@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
    <h5 class="card-title"><b>ID:-</b> {{$post->id}}</h5>

    <h5 class="card-title"><b>Title:-</b> {{$post->title}}</h5>
  </div>
</div>
</div>

@endsection