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

Route::get('/',HomeController@index );
Route::get('/home',HomeController@index );
Route::get('/products',ProductsController@index );
Route::post('/products',ProductsController@create );
Route::get('/products/show',ProductsController@show );
Route::get('/products/delete',ProductsController@showDelete );
Route::post('/products/delete',ProductsController@delete );
Route::get('/fileManager',FileManagerController@index );
Route::post('/fileManager',FileManagerController@create);
Route::post('/fileManager/delete',FileManagerController@delete);
Route::post('/fileManager/update',FileManagerController@update);
Route::get('/debug',DebugController@index);
Route::get('/error',ErrorController@index);


