<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movies.index');

Route::get('/movies/{movie}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');
Route::get('/profile', 'App\Http\Controllers\UserController@index')->name('user.profile');

Route::get('/celebrities', 'App\Http\Controllers\CelebritiesController@index')->name('celebrities');
Route::get('/celebrities/{id}', 'App\Http\Controllers\CelebritiesController@show')->name('celebraty');

Route::get('/movielist', 'App\Http\Controllers\MovielistController@index')->name('movielist');
