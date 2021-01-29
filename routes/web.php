<?php

// Home
Route::domain('localhost')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('about', 'HomeController@about')->name('about');
});

// Questionnere
Route::domain('findyourshape.localhost')->group(function () {
    Route::get('/', 'QuestionnaireController@index')->name('questionnaire.index');
    Route::get('questionnaire/{id}/{i}', 'QuestionnaireController@form')->name('questionnaire.form');
    Route::post('result', 'QuestionnaireController@result')->name('questionnaire.result');
});

Auth::routes(['register' => false, 'confirm' => false, 'reset' => false]);

// Admin
Route::domain('admin.localhost')->group(function(){
    Route::get('/', function () {
        return redirect()->route('question.index');
    });
    Route::middleware('auth')->group(function(){
        Route::prefix('question')->group(function(){
            Route::get('/', 'QuestionController@index')->name('question.index');
            Route::get('create', 'QuestionController@create')->name('question.create');
            Route::post('store', 'QuestionController@store')->name('question.store');
            Route::get('edit/{id}', 'QuestionController@edit')->name('question.edit');
            Route::put('update/{id}', 'QuestionController@update')->name('question.update');
            Route::delete('delete/{id}', 'QuestionController@delete')->name('question.delete');
            Route::get('data', 'QuestionController@data')->name('question.data');
        });
        Route::prefix('result')->group(function(){
            Route::get('/', 'ResultController@index')->name('result.index');
            Route::delete('delete/{id}', 'ResultController@delete')->name('result.delete');
            Route::get('data', 'ResultController@data')->name('result.data');
            Route::get('export', 'ResultController@export')->name('result.export');
        });
    });
});
