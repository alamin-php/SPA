<?php

use Illuminate\Support\Facades\Route;

// Frontend Routes 
Route::get('/', 'FrontendController@index');

Auth::routes();
Route::get('/user/logout', 'UserController@logout')->name('user.logout');

// Backend Routes
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Slider Routes
Route::get('/slider', 'SliderController@index')->name('slider');
Route::post('/slider/add', 'SliderController@add')->name('slider.add');
Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
Route::post('/slider/update/{id}', 'SliderController@update')->name('slider.update');
Route::get('/slider/view/{id}', 'SliderController@view')->name('slider.view');
Route::get('/slider/delete{id}', 'SliderController@delete')->name('slider.delete');

// About Routes
Route::get('/about', 'AboutController@index')->name('about');
Route::post('/about/add', 'AboutController@add')->name('about.add');
Route::get('/about/edit/{id}', 'AboutController@edit')->name('about.edit');
Route::post('/about/update/{id}', 'AboutController@update')->name('about.update');
Route::get('/about/view/{id}', 'AboutController@view')->name('about.view');
Route::get('/about/delete{id}', 'AboutController@delete')->name('about.delete');
