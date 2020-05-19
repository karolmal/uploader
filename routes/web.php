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
Route::get('/files', 'UserNameController@index' );
Route::get('/files/create', 'FileController@index' ); //problem, if /create than dropdown works

Route::post('/files/create', 'FileController@store' )->name('filestore');
Route::post('/users/create', 'UserNameController@store' )->name('userstore');

Route::get('/files/{file}', 'UserNameController@show' )->name('show');
Route::get('/files/{file}/edit', 'UserNameController@edit' )->name('edit');
Route::patch('/files/{file}', 'UserNameController@update' )->name('update');
Route::delete('/files/{file}', 'UserNameController@destroy' )->name('destroy');
