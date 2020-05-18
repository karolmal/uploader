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
*/
Route::get('/file', 'UserNameController@index' );
Route::get('/create', 'FileController@index' );

Route::post('/file', 'FileController@store' )->name('filestore');
Route::post('/create', 'UserNameController@store' )->name('userstore');

Route::get('/file/{file}', 'UserNameController@show' )->name('show');
Route::get('/file/{file}/edit', 'UserNameControlle@edit' )->name('edit');
Route::patch('/file/{file}', 'UserNameControlle@update' )->name('update');
Route::delete('/file/{file}', 'UserNameControlle@destroy' )->name('destroy');