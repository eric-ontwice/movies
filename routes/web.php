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

//Route::get('/', 'GenderController@index');

Route::view('/', 'auth.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Todo lo de Genders
 */
//________________________________Usuario Normales
 Route::get('/genders','GenderController@index')->name('genders.index');
 //________________________________Usuarios Admin
 Route::get('/genders/create','Admin\GenderController@create')->name('gender.create');
 Route::post('/genders/store','Admin\GenderController@store')->name('gender.store');
 Route::get('/genders/edit/{id}','Admin\GenderController@edit')->name('gender.edit');
 Route::post('/genders/update/{id}','Admin\GenderController@update')->name('gender.update');
 Route::get('/genders/delete/{id}','Admin\GenderController@destroy')->name('gender.destroy');


/**
 * Todo lo de Movies
 */
//________________________________Usuario Normales
Route::get('/movies','MovieController@index')->name('genders.index');
Route::get('/peliculas/{pelicula_id}', 'MovieController@show')->middleware('ClassificationBirthdate');
//________________________________Usuarios Admin
Route::get('/movies/create','Admin\MovieController@create')->name('movie.create');
Route::post('/movies/store','Admin\MovieController@store')->name('movie.store');
Route::get('/movies/edit/{id}','Admin\MovieController@edit')->name('movie.edit');
Route::post('/movies/update/{id}','Admin\MovieController@update')->name('movie.update');
Route::get('/movies/delete/{id}','Admin\MovieController@destroy')->name('movie.destroy');

// Registro de usuarios
Route::post('/user/address', 'UserController@getUserData')->name('store-data');//view domicilio
Route::post('/user/store-data', 'UserController@getUserAddress')->name('store-address');//view banco