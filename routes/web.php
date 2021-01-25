<?php

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('questionnaire/{id}/{i}', 'HomeController@questionnaire')->name('questionnaire');
Route::post('result', 'HomeController@result')->name('result');

Auth::routes(['register' => false]);

// Route::middleware('auth')->group(function(){
    Route::prefix('question')->group(function(){
        Route::get('/', 'QuestionController@index')->name('question.index');
        Route::get('create', 'QuestionController@create')->name('question.create');
        Route::post('store', 'QuestionController@store')->name('question.store');
        Route::get('edit/{id}', 'QuestionController@edit')->name('question.edit');
        Route::put('update/{id}', 'QuestionController@update')->name('question.update');
        Route::delete('delete/{id}', 'QuestionController@delete')->name('question.delete');
        Route::get('data', 'QuestionController@data')->name('question.data');
    });
    Route::prefix('responden')->group(function(){
        Route::get('/', 'RespondenController@index')->name('responden.index');
        Route::delete('delete/{id}', 'RespondenController@delete')->name('responden.delete');
        Route::get('data', 'RespondenController@data')->name('responden.data');
    });
// });
