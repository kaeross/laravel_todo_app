@extends('blog-layouts.layout')

@section('content')
   
  
            @foreach ($posts as $post)
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
                    on {{ $post->updated_at}}</p>
            </div>
            <hr>    
              @endforeach
            
            <!-- Pager -->
            <div class="clearfix">
              <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
  
@endsection    