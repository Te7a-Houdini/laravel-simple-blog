@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input name="title"  type="text" class="form-control">
    </div>
    <div class="form-group">
        <label >Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Create Post</button>
</form>
@endsection