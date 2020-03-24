<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

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

    // var_dump($produk_data);die;

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


Route::get('/cek_transaksi', 'RiwayatController@cari');
Route::get('/cek_transaksi/proses', 'RiwayatController@no_rahasia');
Route::get('/cek_transaksi/luar/{rahasia}','RiwayatController@hasilRiwayatLuar');

// function () {
//     return view('forms/cek_transaksi');
// });
Route::get('/rincian-transaksi/{rahasia}', 'BeliController@tampilBeli');
Route::get('/rincian/transaksi/{id}', 'RiwayatController@hasilRiwayat');

Route::get('/rahasia/{rahasia}', 'RiwayatController@rahasia');


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

//flopi payment
Route::post('/payment','MobilePulsaController@payment');
Route::post('/terima_respon','MobilePulsaController@terima_respon');

//Route Lupa Password
Route::post('/Lupa_password','KirimEmailController@lupa_password');

Route::get('/lupas/{email?&kode?}', function(){
    $email = Request::get('email');
    $kode = Request::get('kode');

    $cek_data = DB::table('users')
    ->where('email',$email)
    ->where('remember_token',$kode)
    ->first();

    if($cek_data){
        Session::put('email', $email);
        return view('auth/isi_ulang_password',['email' => $email]);
    }
});

Route::post('/proses_lupa_password', 'KirimEmailController@proses_lupa_password');

//Cetak PDF
Route::get('/cetak_pdf/{rahasia}', 'RiwayatController@cetak_pdf');


//pelanggan
Route::group(['middleware' => ['auth', 'checkRole:customer']], function () {
// Route::group(['middleware' => 'auth'], function () {
    Route::get('/beli', function () {

        $ambilId = Crypt::encrypt(Auth()->user()->id);

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
        return view('/pages/buy_customer',['semua'=>$semua,'data'=>$data,'pulsa'=>$pulsa,'produk_pulsa' => $produk_pulsa,'produk_data' => $produk_data,'bank' => $bank, 'id' => $ambilId]);
    });
    Route::post('/postBeliCustomer','BeliController@beliCustomer');
    Route::get('/rincian-transaksi-customer/{rahasia}', 'BeliController@tampilBeliCustomer');

    Route::get('/riwayat-transaksi/{id}', 'RiwayatController@tampilRiwayat');
    Route::get('/rincian_transaction_customer/{id}', 'RiwayatController@tampilRincian_Customer');


    Route::get('/profil', 'ProfilController@tampilProfil');
    Route::get('/pengaturan-akun', 'ProfilController@pengaturanAkun');
    Route::put('/putEditProfil', 'ProfilController@editProfil');
    Route::put('/putEditPassword', 'ProfilController@editPassword');

    Route::delete('/Pengaturan/hapus/{id}','ProfilController@hapusAkun');
    Route::get('/Destroy/{id}','ProfilController@destroy');
});




