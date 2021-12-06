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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/home','HomeController@index');
    Route::get('/','HomeController@index');
    Auth::routes();
    Route::resource('slide', 'SlideController');
    Route::resource('news', 'NewsController');
    Route::resource('contact', 'ContactController');
    Route::get('/news/{id}','HomeController@shownews');
    Route::get('/contacts','HomeController@create');
    Route::post('/contact','HomeController@store');
    Route::get('/refresh-captcha', 'HomeController@refreshCaptcha')->name('refreshCaptcha');
    Route::get('/allnews','HomeController@allnews');
    Route::get('/admin', 'AdminController@index');



    Route::get('/admin/create', 'AdminController@addslide');
    Route::post('/admin/saveslide', 'AdminController@saveslide');
    Route::get('/admin/editslide/{id}', 'AdminController@editslide');
    Route::put('/admin/updateslide/{id}', 'AdminController@updateslide');
    Route::delete('/admin/destroy/{id}','AdminController@destroy');
    Route::get('/admin/dashboard', 'AdminController@index2');


});

//Auth::routes();
//Route::resource('slide', 'SlideController');
//Route::resource('news', 'NewsController');
//Route::resource('contact', 'ContactController');
//
//Route::get('/home2','HomeController@index2');
//Route::get('/home','HomeController@index');
//Route::get('/','HomeController@index');
//Route::get('/news/{id}','HomeController@shownews');
//Route::get('/contacts','HomeController@create');
//Route::post('/contact','HomeController@store');
//Route::get('/refresh-captcha', 'HomeController@refreshCaptcha')->name('refreshCaptcha');
//Route::get('/allnews','HomeController@allnews');
//Route::get('/admin', 'AdminController@index');
//
////********slide for admin************
//
//Route::get('/admin/create', 'AdminController@addslide');
//Route::post('/admin/saveslide', 'AdminController@saveslide');
//Route::get('/admin/editslide/{id}', 'AdminController@editslide');
//Route::put('/admin/updateslide/{id}', 'AdminController@updateslide');
//Route::delete('/admin/destroy/{id}','AdminController@destroy');
//Route::get('/admin/dashboard', 'AdminController@index2');
////******************
