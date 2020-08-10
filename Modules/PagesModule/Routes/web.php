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

Route::prefix('pagesmodule')->group(function() {
   // Route::get('/', 'PagesModuleController@index');
});
 Route::get('/', 'PagesModuleController@index');
Route::get('/create',"PagesModuleController@create");
Route::get('/show', "PagesModuleController@show");
//Route::get('posts/category',"CategoryController@index");
//Route::post('/store', "PagesModuleController@store");

//Route::get('/edit', "PagesModuleController@edit");

Route::patch('/update', "PagesModuleController@update");