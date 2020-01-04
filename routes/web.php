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

// web.php

Route::get('/','CategoryController@index');
Route::post('/storeCategory','CategoryController@store');
Route::get('/createCategory','CategoryController@create');
Route::get('/editCategory/{id}','CategoryController@edit');
Route::post('/updateCategory','CategoryController@update');
Route::get('/deleteCategory/{id}','CategoryController@delete');
Route::get('/restoreCategory/{id}','CategoryController@restore');