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
Route::get('/service', 'PagesController@service');



Route::get('/hello', function(){
    return '<h1>Hello Laravel</h1>';
});

Route::get('/users/{id}/{name}', function($id,$name){
    return 'User '.$name.' with an id of '.$id;
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
