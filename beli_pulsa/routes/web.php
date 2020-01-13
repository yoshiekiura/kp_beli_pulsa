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
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('/pelanggan/pages/halaman_utama_pelanggan');
});

Route::get('/Register/create','RegisterPelangganController@create');
Route::post('/Register','RegisterPelangganController@store');
Route::resource('Login','LoginPelangganController');

Route::resource('/Produk', 'ProdukPelangganController');
Route::get('/Produk/Cek', 'ProdukPelangganController@cek_provider');
