<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return response()->json([
            'succes'=> true,
            'results'=> $posts
        ]);
    }


    public function show(Post $post)
    {
        //return view('post.index', compact('post'))
        return response()->json([
            'succes'=> true,
            'results'=> $post
        ]);
    }

    public function random() {
        $posts = Post::inRandomOrder()->limit(9)->get();

        return response()->json([
            'success' => true,
            'results' => $posts,
        ]);
    }
}
