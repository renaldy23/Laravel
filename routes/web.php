<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routesget
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftar' , 'PendaftarController@index');
Route::get('/pendaftar/create' , 'PendaftarController@create');
Route::post('/pendaftar' , 'PendaftarController@store');
Route::get('/pendaftar/show/{id}' , 'PendaftarController@show');
Route::get('/pendaftar/edit/{id}' , 'PendaftarController@edit');
Route::put('/pendaftar/update/{id}' , 'PendaftarController@update');
Route::delete('/pendaftar/delete/{id}' , 'PendaftarController@destroy');
Route::get('pendaftar/profile/{id}' , 'PendaftarController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
