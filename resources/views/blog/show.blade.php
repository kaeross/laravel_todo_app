@extends('blog-layouts.layout')

@section('content')

    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">
            {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
                {{ $post->body }}
            </h3>
        </a>
        <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2018</p>
    </div>
    <hr>
    
    <!-- Pager -->
    <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
  
@endsection    