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

Route::get('/', 'PageController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/header', 'AdminController@headerForm')->name('admin.header.form');
    Route::get('/content', 'AdminController@headerForm')->name('admin.content.form');
    Route::get('/footer', 'AdminController@headerForm')->name('admin.footer.form');
});
