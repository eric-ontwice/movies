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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Generos
 Route::get('/genders','GenderController@index')->name('genders.index');
 Route::get('/genders/create','GenderController@create')->name('gender.create');
 Route::post('/genders/store','GenderController@store')->name('gender.store');
 Route::get('/genders/delete/{id}','GenderController@destroy')->name('gender.destroy');
 Route::get('/genders/edit/{id}','GenderController@edit')->name('gender.edit');
 Route::post('/genders/update/{id}','GenderController@update')->name('gender.update');

//Route::resource('genders','GenderController');

// Películas
Route::get('/peliculas/{pelicula_id}', 'MovieController@show');

Route::get('/movies','GenderController@index')->name('genders.index');
Route::get('/movies/create','MovieController@create')->name('movie.create');
Route::post('/movies/store','MovieController@store')->name('movie.store');
Route::get('/movies/edit/{id}','MovieController@edit')->name('movie.edit');
Route::post('/movies/update/{id}','MovieController@update')->name('movie.update');
Route::get('/movies/delete/{id}','MovieController@destroy')->name('movie.destroy');

