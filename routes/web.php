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


Route::get('/','RoController@index')->name('index');
Route::group(['prefix' => 'Service'], function () {
Route::get('/filtter','RoController@filtter')->name('service.filtter');
Route::get('/maintenance','RoController@maintce')->name('service.maint');
Route::get('/sanitization','RoController@Sanitization')->name('service.Sanitization');
Route::get('/monitoring','RoController@monitoring')->name('service.monitoring');
});

Route::group(['prefix' => 'Abouts'], function () {
    Route::get('/abouts','RoController@abouts')->name('about');
    
    });

    Route::get('/contact','RoController@contact')->name('contact');
    Route::post('/save_data','RoController@save_data')->name('save_data');


