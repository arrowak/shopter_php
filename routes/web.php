<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('control')->group(function () {
    Route::resource('categories', 'CategoryController');
    Route::get('categories/{category}/delete', 'CategoryController@destroy')->name('categories.delete');
    Route::get('/', 'ControlController@index')->name('control.index');
});
