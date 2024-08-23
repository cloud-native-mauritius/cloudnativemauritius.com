<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $post->load(['authors', 'categories']);

        return view('post', compact('post'));
    }
}
