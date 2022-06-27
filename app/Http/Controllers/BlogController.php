<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $posts = Blog::all();
        
        return view('blog',['posts' => $posts]);
    }


    public function show(Blog $blog, $id){

        $post = Blog::find($id);
        return view('single-blog')->with('post', $post);
    }
}
