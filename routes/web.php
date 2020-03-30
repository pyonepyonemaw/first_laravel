<?php

use Illuminate\Support\Facades\Route;
use App\Receipe;
use App\category;
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
Route::resource('receipe', 'ReceipeController');
Route::get('home','HomeController@index');
Route::get('/','PublicController@index');
Route::get('detail/{id}','PublicController@show');
Auth::routes();
Route::resource('category', 'CategoryController');