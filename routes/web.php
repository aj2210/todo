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

Route::get('/index', 'ToDosController@index');

Route::resource('todo', 'ToDosController');



Route::get('/', function(){

	return view('auth.login');
});
/*Route::get('/', function(){

	return view('todos.index');
})->middleware('auth');*/

/*Route::get('todo/create', 'ToDosController@create');

Route::post('/', 'ToDosController@store');

Route::post('/todo', 'ToDosController@show');

Route::post('todo/{id}', 'ToDosController@show');*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
