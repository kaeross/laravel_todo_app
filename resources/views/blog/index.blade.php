@extends('blog-layouts.layout')

@section('content')
   
  
    @foreach ($posts as $post)
        @include('blog.post')
    @endforeach
    
    <!-- Pager -->
    <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
  
@endsection    