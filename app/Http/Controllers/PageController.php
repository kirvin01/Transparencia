<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        //$posts = Post::get();
       // $post = Post::first();
       // $post = Post::find(25);        
        //dd($post);
        $posts = Post::latest()->paginate();

        return view('blog', ['posts' => $posts]);
    }
    public function post(Post $post)
    {
        // consulta en base de datos con el slug

        return view('post', ['post' => $post]);
    }
}
