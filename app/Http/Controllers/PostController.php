<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(9);

        return view('posts.index')->with('posts', $posts);
    }


    public function create() {}


    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create($request->all());

        return view('Blog');
    }


    public function show(Request $request) {}


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
