<?php
Auth::routes();


Route::get('/', 'MainController@homepage');

Route::get('/joris{id}', 'MainController@testing');
Route::get('/joris', 'MainController@joris');

Route::get('/jessy', 'MainController@login');

Route::get('/comments', 'CommentsController@comment');

Route::get('/joost', 'MainController@joost');

//  test
