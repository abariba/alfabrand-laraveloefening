<?php
Auth::routes();


Route::get('/', 'MainController@homepage');

Route::get('/joris{id}', 'MainController@testing');

Route::get('/jessy', 'MainController@login');

Route::get('/joost', 'MainController@joost');
