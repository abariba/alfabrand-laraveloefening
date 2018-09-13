<?php
Auth::routes();


Route::get('/',         'MainController@homepage');

Route::get('/heren',    'MainController@heren');

Route::get('/dames',    'MainController@dames');

Route::get('/kinderen', 'MainController@kinderen');

Route::get('/cart',     'MainController@cart');




// test routes
Route::get('/comments', 'CommentsController@comment');

Route::post('/comments','CommentsController@store');
// eind test routes
