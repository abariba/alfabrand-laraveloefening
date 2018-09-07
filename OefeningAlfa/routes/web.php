<?php



Route::get('/master', 'MainController@homepage');

Route::get('/', function () {
    return view('layouts.welcome');
});





// Route::get('/master', function () {
//     return view('master');
// });
