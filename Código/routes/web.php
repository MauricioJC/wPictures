<?php

$router->group(['middleware' => 'auth'], function() {
    Route::view('/', 'home');
});

$router->group(['middleware' => 'guest'], function() {
    Route::view('/', 'welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/picture', 'PictureController');

Route::post('/search','PictureController@search')->name('search');
Route::get('/mylist','PictureController@mylist')->name('mylist');