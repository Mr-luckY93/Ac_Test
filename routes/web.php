<?php
Auth::routes();

Route::get('/', 'App\Http\Controllers\SurveyController@home');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/survey/new', 'App\Http\Controllers\SurveyController@new_survey')->name('new.survey');
Route::get('/survey/{survey}', 'App\Http\Controllers\SurveyController@detail_survey')->name('detail.survey');
Route::get('/survey/view/{survey}', 'App\Http\Controllers\SurveyController@view_survey')->name('view.survey');

Route::get('/survey/{survey}/edit', 'App\Http\Controllers\SurveyController@edit')->name('edit.survey');
Route::patch('/survey/{survey}/update', 'App\Http\Controllers\SurveyController@update')->name('update.survey');

Route::post('/survey/create', 'App\Http\Controllers\SurveyController@create')->name('create.survey');

// Questions related
Route::post('/survey/{survey}/questions', 'App\Http\Controllers\QuestionController@store')->name('store.question');

Route::get('/question/{question}/edit', 'App\Http\Controllers\QuestionController@edit')->name('edit.question');
Route::patch('/question/{question}/update', 'App\Http\Controllers\QuestionController@update')->name('update.question');

//Form related 
Route::post('','App\Http\Controllers\AnswerController@store')->name('answer.store');

Route::auth();