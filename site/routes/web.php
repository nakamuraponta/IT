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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@service');
Route::get('/practice', 'PagesController@practice');


Route::get('/hello', function () {
    return '<h1>Hello Laravel</h1>';
});

Route::get('/user/{id}/{name}', function ($id,$name) {
    return 'User '.$name. ' with an id of ' .$id;
});

Route::resource('posts','PostController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');