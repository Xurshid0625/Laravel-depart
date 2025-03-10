<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('posts.index');
    }

    public function Post(Request $request)
    {
        return view('posts.create');
    }

    public function contact()
    {
        return view('contact');
    }
}
