<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! h
|
*/

Route::get('/','HomeController@index')->name('Home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', 'NewsController@allNews')->name('Categories');
Route::get('/news/{id}', 'NewsController@show')->name('NewsOne');
Route::get('/new', function () {
    return view('new');
});
