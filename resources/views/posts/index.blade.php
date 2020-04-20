@extends('layouts.app')

@section('content')
<a href="{{route('posts.create')}}" class="btn btn-success mb-2">Create Post</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      {{-- <td>{{$post['title']}}</td> --}}
      <td>{{$post->posted_by}}</td>
      <td>{{$post->created_at->format('Y-m-d')}}</td>
      <td>
        {{-- <a href="/posts/{{$post->id}}" class="btn btn-info">View</a> --}}
        <a href="{{route('posts.show', ['post' => $post->id] )}}" class="btn btn-info">View</a>
        <a class="btn btn-primary">Edit</a>
        <a class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection