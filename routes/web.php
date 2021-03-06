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
Route::get('/contacto', 'viewController@showContacto')->name('contactPage');

Route::get('/movilidad&rehabilitacion', 'ProductContainerController@showProductMoviRehab')->name('productMoviRehab');
Route::get('/ortopedia&protesis', 'ProductContainerController@showProductOrtoProt')->name('productOrtoPro');
Route::get('/cirugia&implantes', 'ProductContainerController@showProductCiruImpla')->name('productCiruImpla');
Route::get('/producto/{id}', 'ProductController@showProduct')->name('product');

Route::post('/send', 'EmailController@sendEmail')->name('sendMail');
