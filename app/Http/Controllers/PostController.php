<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function show(Post $post)
    {
        abort_if(! $post->is_published, Response::HTTP_FORBIDDEN);

        $post->load(['authors', 'categories', 'authors.socialMedias']);

        return view('post', compact('post'));
    }
}
