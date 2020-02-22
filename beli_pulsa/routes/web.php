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

// Route::get('/', function () {
//     return view('/pelanggan/pages/beranda');
// });

Route::get('/', function () {
    $produk_pulsa = DB::table('price_lists')
    // ->join('products','price_lists.id_product' ,'=', 'products.id')
    // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    ->where('pulsa_type','pulsa')
    ->groupBy('pulsa_op')
    ->get();

    $produk_internet = DB::table('price_lists')
    // ->join('products','price_lists.id_product' ,'=', 'products.id')
    // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    // ->where('status','active')
    ->where('pulsa_type','data')
    ->groupBy('pulsa_op')
    ->get();

    $bank = DB::table('banks')->get();

    $kode_unik = rand(100,500);
    return view('/pelanggan/pages/beranda',
    ['produk_pulsa' => $produk_pulsa,'produk_internet' => $produk_internet,'bank' => $bank,'unik' => $kode_unik ]);
});


//filter
Route::post('dynamicdependent/cari','DynamicDependent@cari');
Route::post('dynamicdependent/bawaKodeHarga','DynamicDependent@bawaKodeHarga');
Route::post('/Cek-transaksip','DynamicDependent@kirim_transaksi');

//beli
Route::post('/beli','BeliController@beli');
Route::get('/rincian-transaksi/{id}','BeliController@rincian');
// Route::post('/beli-paket','BeliController@beliPaket');
Route::get('/cetak_pdf', 'BeliController@cetak_pdf');

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
// Route::get('/Harga/pulsa/axisxl','HargaController@axisxl');
// Route::get('/Harga/pulsa/indosat','HargaController@indosat');
// Route::get('/Harga/pulsa/smartfren','HargaController@smartfren');
// Route::get('/Harga/pulsa/telkomsel','HargaController@telkomsel');
// Route::get('/Harga/pulsa/tri','HargaController@tri');
// Route::get('/Harga/paket_internet/axis_bronet','HargaController@axis_bronet');
// Route::get('/Harga/paket_internet/axis_keren_zmua','HargaController@axis_keren_zmua');
// Route::get('/Harga/paket_internet/axis_owsem','HargaController@axis_owsem');
// Route::get('/Harga/paket_internet/indosat','HargaController@paket_indosat');
// Route::get('/Harga/paket_internet/indosat_unlimit','HargaController@indosat_unlimit');
// Route::get('/Harga/paket_internet/indosat_new_freedom_30hr','HargaController@indosat_new_freedom_30hr');
// Route::get('/Harga/paket_internet/indosat_yellow','HargaController@indosat_yellow');
// Route::get('/Harga/paket_internet/indosat_mini','HargaController@indosat_mini');
// Route::get('/Harga/paket_internet/indosat_freedom','HargaController@indosat_freedom');
// Route::get('/Harga/paket_internet/telkomsel_mini','HargaController@telkomsel_mini');
// Route::get('/Harga/paket_internet/telkomsel_369','HargaController@telkomsel_369');
// Route::get('/Harga/paket_internet/telkomsel_as','HargaController@telkomsel_as');
// Route::get('/Harga/paket_internet/telkomsel_loop','HargaController@telkomsel_loop');
// Route::get('/Harga/paket_internet/telkomsel_simpati','HargaController@telkomsel_simpati');
// Route::get('/Harga/paket_internet/telkomsel_vas','HargaController@telkomsel_vas');
// Route::get('/Harga/paket_internet/telkomsel_hari','HargaController@telkomsel_hari');
// Route::get('/Harga/paket_internet/telkomsel_bulan','HargaController@telkomsel_bulan');
// Route::get('/Harga/paket_internet/telkomsel_combo','HargaController@telkomsel_combo');
// Route::get('/Harga/paket_internet/telkomsel_combo','HargaController@telkomsel_combo');
// Route::get('/Harga/paket_internet/telkomsel_bulk_zona_1_8','HargaController@telkomsel_bulk_zona_1_8');
// Route::get('/Harga/paket_internet/telkomsel_bulk_zona_1_10','HargaController@telkomsel_bulk_zona_1_10');
// Route::get('/Harga/paket_internet/telkomsel_bulk_zona_1_11','HargaController@telkomsel_bulk_zona_1_11');
// Route::get('/Harga/paket_internet/telkomsel_bulk_all_zona','HargaController@telkomsel_bulk_all_zona');
// Route::get('/Harga/paket_internet/telkomsel_malam_00_07','HargaController@telkomsel_malam_00_07');
// Route::get('/Harga/paket_internet/telkomsel_fix','HargaController@telkomsel_fix');
// Route::get('/Harga/paket_internet/pake_smartfren','HargaController@pake_smartfren');
// Route::get('/Harga/paket_internet/aktivasi_kpk_tri','HargaController@aktivasi_kpk_tri');
// Route::get('/Harga/paket_internet/tri_mini','HargaController@tri_mini');
// Route::get('/Harga/paket_internet/tri_aon','HargaController@tri_aon');
// Route::get('/Harga/paket_internet/tri_biasa','HargaController@tri_biasa');
// Route::get('/Harga/paket_internet/tri_getmore','HargaController@tri_getmore');
// Route::get('/Harga/paket_internet/tri_khusus','HargaController@tri_khusus');
// Route::get('/Harga/paket_internet/xl_combo','HargaController@xl_combo');
// Route::get('/Harga/paket_internet/xl_hotrod','HargaController@xl_hotrod');



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
