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
    return view('layout');
});

Route::get('/books', 'BookController@index')->name('book_index');
Route::get('/book/{id}', 'BookController@show')->name('book_show');
Route::get('/books/add', 'BookController@create')->name('book_add');
Route::post('/books', 'BookController@store')->name('book_save');

Route::delete('/book/{id}', 'BookController@destroy')->name('book_delete');
Route::get('/book/{id}/edit', 'BookController@edit')->name('book_edit');
Route::patch('/book/{id}', 'BookController@update')->name('book_update');
