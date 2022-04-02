<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'judul' => 'Posts',
            'posts' => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            'judul' => 'Single Post',
            'post' => Post::find($slug)
        ]);
    }
}
