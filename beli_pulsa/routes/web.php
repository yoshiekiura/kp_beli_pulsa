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