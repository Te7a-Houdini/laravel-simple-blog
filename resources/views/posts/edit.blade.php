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

    <div class="form-group">
        <label >User</label>
        <select class="form-control" name="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id == $post->user_id) selected @endif >{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection