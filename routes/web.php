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

Route::get('/', function () {
    return view('layout.master');
});



Route::get('/masuk', 'AuthController@login')->name('masuk');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::post('/tiket', 'DashboardController@tiket');
Route::get('/tiketaspirasi', 'DashboardController@aspirasi');
Route::get('/tiketpengaduan', 'DashboardController@pengaduan');



Route::get('/aspirasi', 'AspirasiController@index');
Route::post('/aspirasi/tambah', 'AspirasiController@tambah');
Route::get('/pengaduan', 'PengaduanController@index');
Route::post('/pengaduan/tambah', 'PengaduanController@tambah');

Auth::routes();

Route::group(['middleware'=>['auth']],function(){
    
Route::get('/dashboard', 'DashboardController@index');
    Route::get('/admin/pengaduan/', 'PengaduanController@admin');
Route::get('/pengaduan/{id_pengaduan}/edit', 'PengaduanController@edit');
Route::post('/pengaduan/{id_pengaduan}/update', 'PengaduanController@update');
Route::post('/pengaduan/export', 'PengaduanController@export');
// Route::get('/pengaduan/filter', 'PengaduanController@filter');


Route::get('/aspirasi/{id_aspirasi}/edit', 'AspirasiController@edit');
Route::get('/admin/aspirasi/', 'AspirasiController@admin');
Route::post('/aspirasi/{id_aspirasi}/update', 'AspirasiController@update');
Route::post('/aspirasi/export', 'AspirasiController@export');
});