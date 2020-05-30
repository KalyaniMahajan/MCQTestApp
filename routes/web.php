<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{id}', 'QuestionsController@index');
Route::post('/online-test', 'QuestionsController@getQuestions')->name('online-test');
Route::post('/online-test/submitted', 'QuestionsController@submitTest');
Route::get('/online-test/completed', 'QuestionsController@completedTest');

Route::get('/{id}', 'TestController@index');
