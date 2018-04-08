<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PagesController@home');

Route::get('homepage', 'PagesController@homepage');

Route::get('about', 'PagesController@about');


Route::get('arsip', 'ArsipController@index');

Route::get('arsip/create', 'ArsipController@create');

Route::get('arsip/{arsip}', 'ArsipController@show');

Route::post('arsip', 'ArsipController@store');

Route::get('arsip/{arsip}/edit', 'ArsipController@edit');

Route::patch('arsip/{arsip}', 'ArsipController@update');

Route::delete('arsip/{arsip}', 'ArsipController@destroy' );
