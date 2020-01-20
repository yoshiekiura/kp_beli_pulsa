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

//Route daftar harga coba di pecah datanya
Route::get('/Harga/','HargaController@index');
Route::get('/Harga/pulsaReguler','HargaController@tampilPulsaReguler');
Route::get('/Harga/paketInternet','HargaController@tampilPaketInternet');

//Route Testimoni
Route::resource('/Testimoni','TestimoniController');

//Route Melihat Profile
Route::get('/Profil','ProfilController@store');