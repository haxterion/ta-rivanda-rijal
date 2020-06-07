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

Route::get('/','IndexController@index');
Route::get('/pesan','PesanController@pesan');
Route::post('/pesan/tambah','PesanController@tambah');

Auth::routes();

Route::get('/paket','PaketController@index');

Route::get('/portofolio','PortofolioController@index');
Route::get('/portofolio/{id}', 'PortofolioController@show')->name('portofolio.show');
Route::post('/portofolio/add', 'PortofolioController@add')->name('portofolio.add');

Route::get('/kasir','KasirController@index');
Route::get('/kasirdone','KasirController@done');
Route::get('/kasir/edit/{id}','KasirController@edit');
Route::post('/kasir/update','KasirController@update');

Route::get('/home', 'HomeController@index')->name('home');
