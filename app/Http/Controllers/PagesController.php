<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getHome() {
        $posts = Post::orderBy('updated_at', 'desc')->limit(6)->get();
        return view('pages.home')->with('posts', $posts);
    }

    public function getPosts() {
        return view('pages.posts');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getArchive() {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        return view('pages.posts.front.archive')->with('posts', $posts);
    }

}