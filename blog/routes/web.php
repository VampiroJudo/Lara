<?php


Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', 'PostController@index');

//controller => :Posts Controller

//Eloquent mode => Post

//migration =>create_posts_table


