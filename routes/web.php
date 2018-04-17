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

// Route::prefix('santri')->group(function(){
// 	Route::get('/', 'HomeController@listSantri');
// 	Route::get('create', 'HomeController@create');
// 	Route::post('create', 'HomeController@insert');
// 	Route::get('hapus/{id}', 'HomeController@hapus');
// 	Route::get('edit/{id}', 'HomeController@edit');
// 	Route::post('update', 'HomeController@update');
// });
// Route::prefix('admin')->group(function(){
// 	Route::get('/', 'UserController@listUser');
// 	Route::get('create', 'UserController@create');
// 	Route::post('create', 'UserController@insert');
// 	Route::get('hapus/{id}', 'UserController@hapus');
// 	Route::get('edit/{id}', 'UserController@edit');
// 	Route::post('update', 'UserController@update');
// });
Route::prefix('article')->group(function(){
	Route::get('/', 'ArticleController@index');
	Route::get('create', 'ArticleController@create');
	Route::post('create', 'ArticleController@insert');
	Route::get('hapus/{id}', 'ArticleController@hapus');
	Route::get('edit/{id}', 'ArticleController@edit');
	Route::post('update', 'ArticleController@update');
});

Route::get('/', function () {
	return view('welcome');
});
  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
