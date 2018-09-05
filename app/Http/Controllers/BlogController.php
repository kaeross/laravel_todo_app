<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::where('id', $id)->get();
        return view('blog.show', compact('post'));
    }

    public function create() {
        return view('blog.create', compact('posts'));
    }

    public function store() {
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/blog');
    }
}
