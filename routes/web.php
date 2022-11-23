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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/user-list');


Route::get('user-profile','App\Http\Controllers\UserController@createProfile')->name('createProfile');
Route::post('user-profile','App\Http\Controllers\UserController@storeProfile')->name('storeProfile');
Route::get('user-list','App\Http\Controllers\UserController@userList')->name('userList');
Route::get('export-csv', 'App\Http\Controllers\UserController@export')->name('export');


