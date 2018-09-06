<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('blog.show', compact('post'));
    }

    public function create() {
        return view('blog.create', compact('posts'));
    }

    public function store() {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        Post::create(request(['title', 'body']));
        return redirect('/blog');
    }
}
