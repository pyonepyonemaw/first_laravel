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
// Route::get('/', 'ReceipeController@index');

Route::resource('receipe', 'ReceipeController');

// Route::get('receipe', 'ReceipeController@index');
// Route::get('receipe/create','ReceipeController@createReceipeForm');
// Route::get('receipe/{id}', 'ReceipeController@index');
// Route::post('receipe','ReceipeController@create');
// Route::get('receipe/{id}/edit','ReceipeController@edit');
// Route::patch('receipe/{id}','ReceipeController@update');
// Route::delete('receipe/{id}','ReceipeController@delete');

// Route::get('/', 'HomeController@index');
// Route::get('php', 'HomeController@phpPage');
// Route::get('js', 'HomeController@jsPage');


// Route::get('/', function () {
//     return view('home',[
//     	'name' => "Home Page"
//     ]);
// });

// Route::get('php', function () {
//     return view('php',[
//     	"data" => array(
//     		"lesson1" => "this is php lesson1",
//     		"lesson2" => "this is php lesson2",
//     		"lesson3" => "this is php lesson3"
//     	)
//     ]);
// });

// Route::get('js', function () {
//     return view('js',[
//     	"data" => array(
//     		"lesson1" => "this is JS lesson1",
//     		"lesson2" => "this is JS lesson2",
//     		"lesson3" => "this is JS lesson3"
//     	)
//     ]);
// });

//page 7 type
//get all index page (GET) receipe
//create form (GET) receipe/create
//show data (GET) receipe/1
//create receipe (POST) receipe
//edit form (GET) receipe/1/edit
//update form (PATCH) receipe/1/
//delete receipe (DELETE) receipe/1/


