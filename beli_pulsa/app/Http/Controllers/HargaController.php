<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class HargaController extends Controller
{
    // untuk menampilkan harga produk keseluruhan
    public function index(){
        $price = Price::paginate(15);
        $all = "semua";
        $arr = array('price' => $price, 'all' => $all);
        return view('pelanggan/pages/halaman_produk')->with('arr',$arr);

    }

    // untuk menampilkan harga produk khusus pulsa reguler
    public function tampilPulsaReguler(){
        $pulsaReguler = Price::where('detail_produk','Pulsa Reguler');
        $price = $pulsaReguler->paginate(15);
        $all = "separoh";
        $arr = array('price' => $price, 'all' => $all);
        return view('pelanggan/pages/halaman_produk')->with('arr',$arr);
    }

    // untuk menampilkan harga produk khusus paket internet
    public function tampilPaketInternet(){
        $paketInternet = Price::where('detail_produk','Paket Internet');
        $price = $paketInternet->paginate(15);
        $all = "separoh";
        $arr = array('price' => $price, 'all' => $all);
        return view('pelanggan/pages/halaman_produk')->with('arr',$arr);

    }
}
