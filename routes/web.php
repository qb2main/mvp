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
    Route::post('/header-save', 'AdminController@headerSave')->name('admin.header.save');
    Route::get('/content', 'AdminController@contentForm')->name('admin.content.form');
    Route::post('/content-save', 'AdminController@contentSave')->name('admin.content.save');
    Route::get('/footer', 'AdminController@footerForm')->name('admin.footer.form');
    Route::post('/footer-save', 'AdminController@footerSave')->name('admin.footer.save');

});
