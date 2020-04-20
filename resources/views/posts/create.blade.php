@extends('layouts.app')

@section('content')
<form>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label >Description</label>
        <textarea class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Create Post</button>
</form>
@endsection