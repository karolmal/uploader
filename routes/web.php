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

Route::get('/file', 'FileController@index' )->name('index');
Route::get('/file/create', 'FileController@create' )->name('create');
Route::post('/file', 'FileController@store' )->name('store');
Route::get('/file/{file}', 'FileController@show' )->name('show');
Route::get('/file/{file}/edit', 'FileController@edit' )->name('edit');
Route::patch('/file/{file}', 'FileController@update' )->name('update');
Route::delete('/file/{file}', 'FileController@destroy' )->name('profile');

