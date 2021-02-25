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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'App\Http\Controllers\BooksController@index');
Route::get('/create', 'App\Http\Controllers\BooksController@create');
Route::get('/save', 'App\Http\Controllers\BooksController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\BooksController@edit');
Route::post('/update/{id}', 'App\Http\Controllers\BooksController@update');
Route::get('/delete/{id}', 'App\Http\Controllers\BooksController@destroy');