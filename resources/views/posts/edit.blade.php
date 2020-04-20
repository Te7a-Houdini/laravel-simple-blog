@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.update',['post' => $post->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Title</label>
    <input name="title"  type="text" class="form-control" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label >Description</label>
        <textarea name="description" class="form-control">{{$post->description}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection