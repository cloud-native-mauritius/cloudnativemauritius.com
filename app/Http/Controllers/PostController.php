<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $post->load(['authors', 'categories', 'authors.socialMedias']);

        return view('post', compact('post'));
    }
}
