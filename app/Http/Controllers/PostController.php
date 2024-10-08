<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table("posts")->get();

        dd($posts);


        return view('blog', compact('posts'));

    }
}

