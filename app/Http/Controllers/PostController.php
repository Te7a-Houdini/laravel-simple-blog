<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
       
        return view('index', ['posts' => $postsFromDB]);
    }

    public function show($post)
    {
        $singlePost = Post::findOrFail($post);
        // $singlePost = Post::where('id', $post)->first();

        return view('show', ['post' => $singlePost]);
    }
}
