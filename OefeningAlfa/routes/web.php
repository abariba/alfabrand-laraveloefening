<?php
Auth::routes();


Route::get('/',         'MainController@homepage');

Route::get('/heren',    'MainController@heren');

//Route::get('/dames',    'MainController@dames');

Route::get('/kinderen', 'MainController@kinderen');

Route::get('/cart',     'MainController@cart');

Route::get('/wishlist',  'MainController@wishlist');


// test routes
Route::get('/dames', 'ProductsController@getData');
Route::get('/dames={product}', 'ProductsController@getproduct');
Route::post('/damesl', 'CommentsController@like');
Route::post('/damesd', 'CommentsController@dislike');

Route::get('/comments', 'CommentsController@comment'); //Rights and roles

Route::post('/comments','CommentsController@store');   //Places comments in database

Route::post('/comments','CommentsController@getDeleteComment');

Route::post('/comments','CommentsController@postEditComment');

Route::post('/comments','CommentsController@postLikeComment');  //Delete comments
// eind test routes
