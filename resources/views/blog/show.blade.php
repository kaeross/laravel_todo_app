@extends('blog-layouts.layout')

@section('content')
        
    <h2 class="post-title">
    {{ $post->title }}
    </h2>
    <p class="post-subtitle">
        {{ $post->body }}
    </p>
    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a>, {{ $post->created_at->diffForHumans()}}</p>
  
@endsection    