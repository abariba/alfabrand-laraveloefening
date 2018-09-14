<?php
Auth::routes();


Route::get('/',         'MainController@homepage');

Route::get('/heren',    'MainController@heren');

Route::get('/dames',    'MainController@dames');

Route::get('/kinderen', 'MainController@kinderen');

Route::get('/cart',     'MainController@cart');




// test routes
Route::get('/comments', 'CommentsController@comment'); //Rights and roles

Route::post('/comments','CommentsController@store');   //Places comments in database

Route::post('/delete/{{ $comment->id}}','CommentsController@delete');  //Delete comments
// eind test routes
