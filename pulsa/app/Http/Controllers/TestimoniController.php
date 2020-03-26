<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TestimoniController extends Controller
{
    //

    public function testimoni(Request $request){
        $this->validate($request,[
            'no_telpon' => 'required|numeric|min:0',
            'komentar' => 'required',
            'rating' => 'required'
        ]);

        $phone = $request -> input('no_telpon');
        $pesan = $request -> input('komentar');
        $rating = $request -> input('rating');
        $waktu = Carbon::now();

        // var_dump($rating);die;

        $jumlah_sensor=4;
        $setelah_angka_ke=4;

        //ambil 4 angka di tengah yan akan disensor
        $censored = mb_substr($phone, $setelah_angka_ke, $jumlah_sensor);

        //pecah kelompok angka pertama dan terakhir
        $phone2=explode($censored,$phone);

        //gabung angka perama dan terakhir dengan angka tengah yang telah di sensor
        $telp=$phone2[0]."XXXX".$phone2[1];



        DB::table('testimonials')->insert([

            'no_telpon' => $telp,
            'komentar' => $pesan,
            'rating' => $rating,
            'buat_komentar' => $waktu,

        ]);

        Session::flash('sukses','testimoni anda telah dikirim. terima kasih atas pembeliaanya');
        return Redirect('/cek_transaksi');
    }
    public function testimoniCustomer(Request $request){
        $this->validate($request,[
            'no_telpon' => 'required|numeric|min:0',
            'komentar' => 'required',
            'rating' => 'required'
        ]);

        $phone = $request -> input('no_telpon');
        $pesan = $request -> input('komentar');
        $rating = $request -> input('rating');
        $waktu = Carbon::now();

        $jumlah_sensor=4;
        $setelah_angka_ke=4;

        //ambil 4 angka di tengah yan akan disensor
        $censored = mb_substr($phone, $setelah_angka_ke, $jumlah_sensor);

        //pecah kelompok angka pertama dan terakhir
        $phone2=explode($censored,$phone);

        //gabung angka perama dan terakhir dengan angka tengah yang telah di sensor
        $telp=$phone2[0]."XXXX".$phone2[1];



        DB::table('testimonials')->insert([

            'no_telpon' => $telp,
            'komentar' => $pesan,
            'rating' => $rating,
            'buat_komentar' => $waktu,

        ]);

        Session::flash('sukses','testimoni anda telah dikirim. terima kasih atas pembeliaanya');
        return Redirect('/beli');
    }
}
