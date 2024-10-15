<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Cache\RedisStore;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();


        return view('posts.index', compact('posts'));

    }

    public function show(Post $post)
    {

      return view('posts.show', compact('post'));


    }

    public function create()
    {
        return view('posts.create',['post'=> new Post()]);
    }

    public function store(StorePostRequest $request)
    {

       Post::create($request->validated());



      // return redirect()->route('posts.index'); otra manera como el toroute pero mas larga
        return to_route('posts.index')
            ->with('status', 'Post create successfully');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {

       $post->update($request->validated());



       return to_route('posts.show', $post)
           ->with('status', 'Post updated successfully');
    }
}

