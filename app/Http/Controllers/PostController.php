<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
       
        return view('posts.index', ['posts' => $postsFromDB]);
    }

    public function show($post)
    {
        $singlePost = Post::findOrFail($post);
        // $singlePost = Post::where('id', $post)->first();

        return view('posts.show', ['post' => $singlePost]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
