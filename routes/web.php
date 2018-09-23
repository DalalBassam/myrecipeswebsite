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

  Route::get('/', 'PostsController@index');

Route::get('/about', 'PagesController@about');

  Route::resource('/posts', 'PostsController');
  Route::get('/posts/{id}/destroy', 'PostsController@destroy');


  Route::get('/category/{id}','categoriesController@show');


  Route::get('/posts/create','categoriesController@index');
Auth::routes();

  Route::get('/dashboard','DashboardController@index');
