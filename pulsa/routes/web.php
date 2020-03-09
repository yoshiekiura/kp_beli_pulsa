<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
// pelanggan
Route::get('/', function () {
    return view('/customer/pages/index');
});
Route::get('/cek_transaksi', function () {
    return view('/customer/forms/cek_transaksi');
});
Route::get('/login', function () {
    return view('/customer/forms/login');
});
Route::get('/daftar', function () {
    return view('/customer/forms/daftar');
});
Route::get('/beli', function () {
    return view('/customer/pages/buy_customer');
});
Route::get('/rincian-transaksi', function () {
    return view('/customer/pages/detail_transaction');
});
Route::get('/rincian-transaksi-pelanggan', function () {
    return view('/customer/pages/detail_transaction_customer');
});
Route::get('/riwayat-transaksi', function () {
    return view('/customer/pages/history_transaction_customer');
});
Route::get('/profil', function () {
    return view('/customer/pages/profil_customer');
});
Route::get('/pengaturan-akun', function () {
    return view('/customer/forms/setting_customer');
});
Route::get('/logout', function () {
    return view('/customer/pages/index');
});

// admin
Route::get('/login-admin', function () {
    return view('/admin/login_admin');
});
Route::get('/update-harga', 'MobilePulsaController@tambahHarga');
Route::get('/update-bank', 'MobilePulsaController@tambahBank');
Route::get('/admin-dashboard', function () {
    $bank = DB::table('banks')->count();
    return view('/admin/pages/index',compact('bank'));
});
Route::get('/purchase', function () {
    return view('/admin/pages/purchase');
});
Route::get('/daftar-pelanggan', function () {
    return view('/admin/pages/list_customer');
});
Route::get('/lihat-komplain', function () {
    return view('/admin/pages/complain');
});
Route::get('/logout-admin', function () {
    return view('/admin/login_admin');
});


