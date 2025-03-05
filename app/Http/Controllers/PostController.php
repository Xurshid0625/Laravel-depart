<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('index')->with('posts',$posts);

    }


    public function create()
    {
        return view('posts.create')->with([
            'title',
            'text'
        ]);
    }


    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'text' => $request->text
        ]);

        return view('posts.index');
    }


    public function show(Post $posts)
    {
      return view('posts.index');
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
