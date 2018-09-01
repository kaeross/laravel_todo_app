<?php

use App\Task;

Route::get('/', 'PostsController@index');
Route::get('/{Post}', 'PostsController@show');

Route::get('/task', 'TaskController@index');
Route::get('/{task}', 'TaskController@show');

// Controller => PostsController

// Eloquent model => Post

// migration => create_posts_table