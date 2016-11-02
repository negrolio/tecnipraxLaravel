<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'viewController@showHome')->name('home');
Route::get('/nosotros', 'viewController@showNosotros')->name('nosotros');
Route::get('/movilidad&rehabilitacion', 'viewController@showProductMoviRehab')->name('productMoviRehab');
Route::get('/ortopedia&protesis', 'viewController@showProductOrtoProt')->name('productOrtoPro');
Route::get('/cirugia&implantes', 'viewController@showProductCiruImpla')->name('productCiruImpla');
