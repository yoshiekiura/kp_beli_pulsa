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
    return view('/pages/index',['semua'=>$semua,'data'=>$data,'pulsa'=>$pulsa,'produk_pulsa' => $produk_pulsa,'produk_data' => $produk_data,'bank' => $bank]);
});
Route::post('/postBeli','BeliController@beli');

//filter
Route::post('Ajax/cari','AjaxController@cari');
Route::post('/Ajax/bawaKodeHarga','AjaxController@bawaKodeHarga');
Route::post('/Cek-transaksip','AjaxController@kirim_transaksi');


Route::get('/cek_transaksi', function () {
    return view('forms/cek_transaksi');
});
Route::get('/rincian-transaksi/{rahasia}', 'BeliController@tampilBeli');

//auth
Route::get('/login', function () {
    return view('/auth/login');
})->name('login');
Route::post('/postLogin','AuthController@postLogin');
Route::post('/postDaftar','AuthController@postDaftar');
Route::get('/daftar', function () {
    return view('/auth/daftar');
});
Route::get('/logout', 'AuthController@logout');

//pelanggan
Route::group(['middleware' => ['auth', 'checkRole:customer']], function () {
// Route::group(['middleware' => 'auth'], function () {
    Route::get('/beli', function () {
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
        return view('/pages/buy_customer',['semua'=>$semua,'data'=>$data,'pulsa'=>$pulsa,'produk_pulsa' => $produk_pulsa,'produk_data' => $produk_data,'bank' => $bank]);
    });
    Route::post('/postBeliCustomer','BeliController@beliCustomer');
    Route::get('/rincian-transaksi-customer/{rahasia}', 'BeliController@tampilBeliCustomer');

    Route::get('/riwayat-transaksi/{id}', 'RiwayatController@tampilRiwayat');

    Route::get('/profil', 'ProfilController@tampilProfil');
    Route::get('/pengaturan-akun', 'ProfilController@pengaturanAkun');
    Route::put('/putEditProfil', 'ProfilController@editProfil');
    Route::put('/putEditPassword', 'ProfilController@editPassword');
});



