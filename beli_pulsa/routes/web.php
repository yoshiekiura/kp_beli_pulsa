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
use Illuminate\Support\Facades\Input;


// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

//Route Halaman Awal
Route::get('/', function () {
    return view('/pelanggan/pages/halaman_utama_pelanggan');
});

//Route Halaman Awal Pelanggan yang sudah login
Route::get('/Awal_pelanggan', function () {
    $price = DB::table('prices')->paginate(10);
    return view('/pelanggan/pages/login_pelanggan_sukses',compact('price'));
});

//Route View Daftar Pelanggan dan Proses Daftar Pelanggan
Route::get('/Register/create','RegisterPelangganController@create');
Route::post('/Register','RegisterPelangganController@store');


//Route Login Pelanggan dan Proses Login
Route::get('/Login/create','LoginPelangganController@create');
Route::post('/Login','LoginPelangganController@store');
Route::get('/Login/index','LoginPelangganController@index');


//Route Logout!
Route::get('/Logout', function () {
    Session::flush();
    Session::flash('Logout','Anda Sudah Keluar dari Akun anda.');
    return redirect('/Login/create');
});

//Route daftar harga Semuanya
Route::get('/Harga','HargaController@index');
Route::get('/Harga/pulsa/axisxl','HargaController@axisxl');
Route::get('/Harga/pulsa/indosat','HargaController@indosat');
Route::get('/Harga/pulsa/smartfren','HargaController@smartfren');
Route::get('/Harga/pulsa/telkomsel','HargaController@telkomsel');
Route::get('/Harga/pulsa/tri','HargaController@tri');
Route::get('/Harga/paket_internet/axis_bronet','HargaController@axis_bronet');
Route::get('/Harga/paket_internet/axis_keren_zmua','HargaController@axis_keren_zmua');
Route::get('/Harga/paket_internet/axis_owsem','HargaController@axis_owsem');
Route::get('/Harga/paket_internet/indosat','HargaController@paket_indosat');
Route::get('/Harga/paket_internet/indosat_unlimit','HargaController@indosat_unlimit');
Route::get('/Harga/paket_internet/indosat_new_freedom_30hr','HargaController@indosat_new_freedom_30hr');
Route::get('/Harga/paket_internet/indosat_yellow','HargaController@indosat_yellow');
Route::get('/Harga/paket_internet/indosat_lainnya','HargaController@indosat_lainnya');
Route::get('/Harga/paket_internet/indosat_freedom','HargaController@indosat_freedom');
Route::get('/Harga/paket_internet/telkomsel_mini','HargaController@telkomsel_mini');
Route::get('/Harga/paket_internet/telkomsel_369','HargaController@telkomsel_369');
Route::get('/Harga/paket_internet/telkomsel_zona_1_11','HargaController@telkomsel_zona_1_11');
Route::get('/Harga/paket_internet/telkomsel_as','HargaController@telkomsel_as');
Route::get('/Harga/paket_internet/telkomsel_loop','HargaController@telkomsel_loop');
Route::get('/Harga/paket_internet/telkomsel_simpati','HargaController@telkomsel_simpati');
Route::get('/Harga/paket_internet/telkomsel_add','HargaController@telkomsel_add');
Route::get('/Harga/paket_internet/telkomsel_bulan','HargaController@telkomsel_bulan');
Route::get('/Harga/paket_internet/telkomsel_combo','HargaController@telkomsel_combo');
Route::get('/Harga/paket_internet/telkomse_hari','HargaController@telkomse_hari');
Route::get('/Harga/paket_internet/telkomsel_zona_1_8','HargaController@telkomsel_zona_1_8');
Route::get('/Harga/paket_internet/telkomsel_zona_1_10','HargaController@telkomsel_zona_1_10');
Route::get('/Harga/paket_internet/telkomsel_bulk_tsel_semua_zona','HargaController@telkomsel_bulk_tsel_semua_zona');
Route::get('/Harga/paket_internet/telkomsel_depok','HargaController@telkomsel_depok');
Route::get('/Harga/paket_internet/telkomsel_data_malam_00_07','HargaController@telkomsel_data_malam_00_07');
Route::get('/Harga/paket_internet/telkomsel_fix','HargaController@telkomsel_fix');
Route::get('/Harga/paket_internet/paket_smartfren','HargaController@paket_smartfren');
Route::get('/Harga/paket_internet/three_tri_kpk_kartu_perdana_kosong','HargaController@three_tri_kpk_kartu_perdana_kosong');
Route::get('/Harga/paket_internet/three_tri_mini','HargaController@three_tri_mini');
Route::get('/Harga/paket_internet/three_tri_aon','HargaController@three_tri_aon');
Route::get('/Harga/paket_internet/three_tri_cinta','HargaController@three_tri_cinta');
Route::get('/Harga/paket_internet/three_tri_anynet','HargaController@three_tri_anynet');
Route::get('/Harga/paket_internet/three_tri','HargaController@three_tri');
Route::get('/Harga/paket_internet/three_tri_getmore','HargaController@three_tri_getmore');
Route::get('/Harga/paket_internet/three_tri_khusus','HargaController@three_tri_khusus');
Route::get('/Harga/paket_internet/three_tri_extra_kuota','HargaController@three_tri_extra_kuota');
Route::get('/Harga/paket_internet/xl_combo','HargaController@xl_combo');
Route::get('/Harga/paket_internet/xl_hotrod','HargaController@xl_hotrod');










//Route Testimoni
Route::resource('/Testimoni','TestimoniController');

//Route Melihat Profile
Route::get('/Profil','ProfilController@store');

//Pengaturan
Route::get('/Pengaturan/{id}', 'ProfilController@edit');
Route::get('/Pengaturan/Pwd/{id}', 'ProfilController@editPwd');
Route::get('/Pengaturan/Pin/{id}', 'ProfilController@editPin');
Route::put('/Pengaturan/Update/{id}', 'ProfilController@update');
Route::put('/Pengaturan/Update/Pwd/{id}', 'ProfilController@updatePwd');
Route::put('/Pengaturan/Update/Pin/{id}', 'ProfilController@updatePin');

//Route Riwayat
Route::get('/Riwayat','RiwayatController@index');

//Route Send Email
Route::get('/SendEmail','SendEmailController@index');

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

//Route Logout(Admin)!
Route::get('/Admin/Logout', function () {
    Session::flush();
    Session::flash('Logout','Anda Telah Keluar. Silahkan Login Kembali');
    return redirect('/Login/Admin');
});

//Route untuk coba paksa
Route::get('/Login/cobapaksa', function () {
    Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
    return redirect('/Login/create');
});

Route::get('/kuntul', function () {
        return view('admin/forms/login');
});