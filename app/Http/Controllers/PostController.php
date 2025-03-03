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
    }

    
    public function create()
    {
        return view('Post.create');
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show(string $id)
    {
        //
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
