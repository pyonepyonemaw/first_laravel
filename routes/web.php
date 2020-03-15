<?php

use Illuminate\Support\Facades\Route;
use App\Receipe;
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
// app()->bind('App\test',function(){
// 	return new \App\test("something is happening right now!");
// });
// app()->bind('test',function(){
// 	return new \App\test;
// });
// Route::get('/',function(){
// 	dd(app('test'));
// });
Route::resource('receipe', 'ReceipeController');
Route::get('home','HomeController@index');
Auth::routes();