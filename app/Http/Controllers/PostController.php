<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
  
    public function index(Post $post){

        

        $post = Post::all();
        // dd($post);
        return view('home', ['posts' => $post]);


    }

    public function localar(Post $post){
        $post = Post::all();
        // dd($post);
        return view('home-ar', ['posts' => $post]);
    }
}
