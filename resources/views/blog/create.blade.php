@extends('blog-layouts.layout')

@section('content')

<h2>Create new post</h2>

<form method="POST" action="/blog" class="form">
{{ csrf_field() }}
    <div class="form-group  mt-4">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="" />
    </div>

    <div class="form-group  mt-1">
            <label for="body">Body:</label>
            <textarea type="text" name="body" id="body" class="form-control" value=""></textarea>
    </div>


    <button type="submit" class="btn btn-primary mb-5">Publish</button> 
</form>

@include('layouts.errors')

@endsection