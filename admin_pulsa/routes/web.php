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
    return view('auth/login_admin');
})->name('login');

Route::post('/postLogin','AuthController@postLogin');
Route::get('/logout','AuthController@logOut');

Route::group(['middleware' => ['auth','checkRole:admin']], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/transaksi-pembelian', 'AdminController@transaksiPembelian');
    Route::get('/daftar-pelanggan', 'AdminController@daftarPelanggan');
    Route::get('/komplain', 'AdminController@komplain');
});
