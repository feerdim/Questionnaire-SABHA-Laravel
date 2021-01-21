<?php

// Route::get('/', function () {
//     return view('new');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('pertanyaan/{id}/{i}', 'HomeController@pertanyaan')->name('pertanyaan');
Route::get('hasil/{id}/{i}', 'HomeController@hasil')->name('hasil');

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

