<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
       
        return view('posts.index', ['posts' => $postsFromDB]);
    }

    public function show(Post $post)
    {
        // $singlePost = Post::where('id', $post)->first();

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',['users' => $users]);
    }

    public function store(Request $request)
    {
        // $data = request()->all();
        // $title = request()->title;
        // $description = request()->description;
        $title = $request->title;
        $description = $request->description;
        $userId = $request->user_id;

        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userId
        ]);

        // $post = new Post;

        // $post->title = $title;
        // $post->description = $description;

        // $post->save();
       
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        $users = User::all();

        return view('posts.edit', ['post' => $post, 'users' => $users]);
    }

    public function update(Request $request, $post)
    {
        $singlePost = Post::findOrFail($post);
  
        $singlePost->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy($post)
    {
        // Post::where('id', $post)->delete(); in single query
        
        $singlePost = Post::findOrFail($post);

        $singlePost->delete();

        return redirect()->route('posts.index');
    }
}
