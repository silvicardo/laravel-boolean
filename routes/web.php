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


//Rotte HomeController
Route::get('/','HomeController@index')->name('homePage');
Route::get('/corso','HomeController@corso')->name('corso');
Route::get('/metodo','HomeController@metodo')->name('metodo');
Route::get('/dopo-il-corso','HomeController@dopoIlCorso')->name('dopoIlCorso');
Route::get('/faq','HomeController@faq')->name('faq');

//Rotte StaticPagesController
Route::get('/privacy-policy','StaticPagesController@privacyPolicy')->name('privacyPolicy');
Route::get('/lavora-con-noi','StaticPagesController@lavoraConNoi')->name('lavoraConNoi');
