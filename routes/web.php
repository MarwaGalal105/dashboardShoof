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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/', 'Auth\LoginController@index');

 //Route::post('register', 'Auth\RegisterController@store')->name('register');
// Route::post('register', 'Auth\LoginController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','dashboard\HomeController@index')->name('dashboard');

Route::resource('dashboard/categories', 'dashboard\categories');
Route::resource('dashboard/cities', 'dashboard\cities');
Route::resource('dashboard/users', 'dashboard\users');
Route::resource('dashboard/options', 'dashboard\options');
Route::resource('dashboard/info', 'dashboard\info');



Route::get('/front','front\home@index')->name('front');
//Route::resource('registerfront', 'front\registerfront');
Route::resource('/lostchild','front\lostchild');
Route::resource('/findchild','front\findchild');
Route::get('searchlost', 'front\lostchild@search')->name('searchlost');
Route::get('searchfound', 'front\findchild@search')->name('searchfound');
Route::get('/contact','front\contact@index');
Route::post('contact', 'front\contact@sendmail');

// Route::get('/registerfront', 'front\registerfront@create');
// Route::post('registerfront', 'front\registerfront@store')->name('registerfront');






