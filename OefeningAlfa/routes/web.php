<?php
Auth::routes();


Route::get('/', 'MainController@homepage');

// Route::get('/joris{id}', 'MainController@testing');

//Route::get('/product/{id}', 'ProductController@show');

Route::get('/comments', 'CommentsController@comment'); 

Route::post('/comments', 'CommentsController@store');

Route::get('/heren', 'MainController@heren');

Route::get('/dames', 'MainController@dames');

Route::get('/kinderen', 'MainController@kinderen');
