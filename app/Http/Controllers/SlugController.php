<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SlugController extends Controller
{

    public function getPostBySlug($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        return view('pages.posts.front.show')->with('post', $post);
    }

}
