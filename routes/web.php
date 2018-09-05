<?php

use App\Task;

Route::get('/blog', 'BlogController@index');
Route::get('/posts', 'BlogController@index');
Route::get('/blog/${post}', 'BlogController@show');
Route::get('/blog/create', 'BlogController@create');
Route::POST('/blog', 'BlogController@store');

Route::get('/', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show');


Route::get('/tasks', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');

// Controller => PostsController

// Eloquent model => Post

// migration => create_posts_table