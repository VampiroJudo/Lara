<?php




Route::get('/', 'PostController@index');

Route::get('/posts/{create}', 'PostsController@create');

// Route::get('/posts/{post}', 'PostsController@show');