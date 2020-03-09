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
    $produk_pulsa = DB::table('price_lists')
    ->where('pulsa_type','pulsa')
    ->where('status','active')
    ->groupBy('pulsa_op')
    ->get();
    $produk_data = DB::table('price_lists')
    ->where('pulsa_type','data')
    ->where('status','active')
    ->groupBy('pulsa_op')
    ->get();

    $bank = DB::table('banks')->get();

    $semua = DB::table('price_lists')
    ->where('pulsa_type', 'data')
    ->orWhere('pulsa_type', 'pulsa')
    ->get();

    $data = DB::table('price_lists')->where('pulsa_type', 'data')->get();
    $pulsa = DB::table('price_lists')->where('pulsa_type', 'pulsa')->get();
    return view('/customer/pages/index',['semua'=>$semua,'data'=>$data,'pulsa'=>$pulsa,'produk_pulsa' => $produk_pulsa,'produk_data' => $produk_data,'bank' => $bank]);
});

//filter
Route::post('Ajax/cari','AjaxController@cari');
Route::post('/Ajax/bawaKodeHarga','AjaxController@bawaKodeHarga');
Route::post('/Cek-transaksip','AjaxController@kirim_transaksi');

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
Route::get('/update-harga', 'MobilePulsaController@updateHarga');
Route::get('/update-bank', 'MobilePulsaController@updateBank');

Route::get('/admin-dashboard', function () {
    $bank = DB::table('banks')->count();
    $customer = DB::table('users')->count();
    $harga = DB::table('price_lists')->count();
    return view('/admin/pages/index',['bank'=>$bank,'customer'=>$customer,'harga'=>$harga]);
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


