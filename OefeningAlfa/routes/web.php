<?php


<<<<<<< Updated upstream
Route::get('/', 'PathController@homepage');
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('resources.views.webshop.master');
});
>>>>>>> Stashed changes
