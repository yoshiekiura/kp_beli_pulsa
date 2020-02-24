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

use App\Http\Controllers\BeliController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\UserEditProfil;

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

//Route Halaman Awal
Route::get('/cadangan', function () {
    // $beli = DB::table('prices')->get();

    // $produk = DB::table('prices')->groupBy('detail_produk')->get();
    // return view('/pelanggan/pages/halaman_utama_pelanggan',
    // ['beli' => $beli,
    // 'produk' => $produk ]);
    $produk = DB::table('price_lists')
    ->join('products','price_lists.id_product' ,'=', 'products.id')
    ->join('providers','price_lists.id_provider' ,'=', 'providers.id')

    ->groupBy('id_product')->get();

    var_dump($produk);
    return view('/pelanggan/pages/halaman_utama_pelanggan',
    ['produk' => $produk ]);
});



Route::get('/', function () {
    $nama = Session::get('nama');
    $nomor = DB::table('users')
    ->select('no_telpon')
    ->where('username',$nama)
    ->get();
    // var_dump($nomor);
    // die;


    $produk_pulsa = DB::table('price_lists')
    // ->join('products','price_lists.id_product' ,'=', 'products.id')
    // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    ->where('pulsa_type','pulsa')
    ->where('status','active')
    ->groupBy('pulsa_op')
    ->get();

    $produk_internet = DB::table('price_lists')
    // ->join('products','price_lists.id_product' ,'=', 'products.id')
    // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    // ->where('status','active')
    ->where('pulsa_type','data')
    ->where('status','active')
    ->groupBy('pulsa_op')
    ->get();

    $bank = DB::table('banks')->get();


    return view('/pelanggan/pages/beranda',
    ['produk_pulsa' => $produk_pulsa,'produk_internet' => $produk_internet,'bank' => $bank,'nomor' => $nomor]);
});


//filter
Route::post('dynamicdependent/cari','DynamicDependent@cari');
Route::post('dynamicdependent/bawaKodeHarga','DynamicDependent@bawaKodeHarga');
Route::post('/Cek-transaksip','DynamicDependent@kirim_transaksi');

//beli
Route::post('/beli','BeliController@beli');
Route::get('/rincian-transaksi/{id}','BeliController@rincian');
// Route::post('/beli-paket','BeliController@beliPaket');
Route::get('/cetak_pdf/{id}', 'BeliController@cetak_pdf');

//cek-transaksi
Route::get('/Cek-transaksi','BeliController@cek_transaksi');
Route::get('/Cek-transaksi/{no_telp}','DynamicDependent@tampil_transaksi');
Route::get('/Cek-rincian/{id}', 'DynamicDependent@tampil_hasil_rincian');

//komplain
Route::get('/Komplain/{pesan?}',function(){
    $pesan = Request::get('pesan');
// $kode = Request::get('kode');
    return view('/pelanggan/forms/komplain',compact('pesan'));
});
Route::post('Komplain/Kirim', 'BeliController@komplain');


//Route View Daftar Pelanggan dan Proses Daftar Pelanggan
Route::get('/Daftar','RegisterPelangganController@create');
Route::post('/Register','RegisterPelangganController@store');


//Route Login Pelanggan dan Proses Login
Route::get('/Login','LoginPelangganController@create');
Route::post('/Login','LoginPelangganController@store');
Route::get('/Login/index','LoginPelangganController@index');


//Route Logout!
Route::get('/Logout', function () {
    Session::flush();
    Session::flash('Logout','Anda Sudah Keluar dari Akun anda.');
    return redirect('/Login');
});

//Route daftar harga Semuanya
Route::get('/Harga','HargaController@index');
Route::get('/Harga/Pulsa','HargaController@pulsa');
Route::get('/Harga/Data','HargaController@data');

//Route Testimoni
Route::resource('/Testimoni','TestimoniController');

//Route Melihat Profile
Route::get('/Profil','ProfilController@store');

//Pengaturan
Route::get('/Pengaturan/{id}', 'ProfilController@edit');
Route::get('/Pengaturan/Pwd/{id}', 'ProfilController@editPwd');
Route::delete('/Pengaturan/hapus/{id}','ProfilController@hapus');
Route::get('/Destroy/{id}','ProfilController@destroy');


Route::get('/Pengaturan/Pin/{id}', 'ProfilController@editPin');
Route::put('/Pengaturan/Update/{id}', 'ProfilController@update');
Route::put('/Pengaturan/Update/Pwd/{id}', 'ProfilController@updatePwd');
Route::put('/Pengaturan/Update/Pin/{id}', 'ProfilController@updatePin');

//Route Riwayat
Route::get('/Riwayat/{nama}','RiwayatController@index');

//Route Send Email
Route::get('/SendEmail','SendEmailController@index');

//Route Lupa Password
Route::post('/Lupa_password','SendEmailController@lupa_password');

Route::get('/lupas/{email?&kode?}', function(){
    $email = Request::get('email');
    $kode = Request::get('kode');

    $cek_data = DB::table('users')->where('email',$email)->orWhere('kode',$kode)->first();

    if($cek_data){
        Session::put('email', $email);
        return view('/pelanggan/forms/isi_ulang_password',['email' => $email]);
    }
});



Route::post('/proses_lupa_password', 'SendEmailController@proses_lupa_password');

// Route::get('/Reset_pwd',function () {
//     return view('/pelanggan/pages/halaman_utama_pelanggan');
// });

//Route coba
Route::get('/coba/{email?&kode?}', function(){
    $email = Request::get('email');
    $kode = Request::get('kode');

    $cek = DB::table('users')
            ->where('username',Session::get('nama'))
            ->orWhere('email',$email)
            ->orWhere('kode',$kode)->first();

    if($cek){
        DB::table('users')
            ->where('username',Session::get('nama'))
            ->orWhere('email',$email)
            ->orWhere('kode',$kode)
            ->update([
            'status_akun' => 'Terverifikasi'
        ]);

        Session::flash('Verifed','Akun anda telah di Verifikasi');
        return redirect('/Profil');
    }
});

//Menuju Admin
Route::resource('Login/Admin', 'AdminController');
Route::get('Admin/Home', 'AdminController@home');
Route::get('Admin/LihatPelanggan', 'AdminController@lihat');
Route::get('Admin/LihatKomplain', 'AdminController@komplain');

//Route Logout(Admin)!
Route::get('/Admin/Logout', function () {
    Session::flush();
    Session::flash('Logout','Anda Telah Keluar. Silahkan Login Kembali');
    return redirect('/Login/Admin');
});

//Route untuk coba paksa
Route::get('/Login/cobapaksa', function () {
    Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
    return redirect('/Login');
});


//kosong
