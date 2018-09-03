<?php

use App\Task;

Route::get('/', 'PostsController@index');
Route::get('/posts/{Post}', 'PostsController@show');

Route::get('/tasks', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');

// Controller => PostsController

// Eloquent model => Post

// migration => create_posts_table