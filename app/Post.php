<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function index () {
        return view('posts.index');
    }
}
