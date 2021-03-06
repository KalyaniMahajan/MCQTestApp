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

Route::get('/online-test/{url_token}', 'TestController@welcome')->name('welcome');
Route::get('/online-test/{url_token}/start', 'TestController@startTest')->name('test.start');
Route::post('/online-test/{url_token}/submit', 'TestController@submitTest')->name('test.submit');
