<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class HargaController extends Controller
{
    // untuk menampilkan harga produk keseluruhan
    public function index(){
        $price = Price::all();
        $judul = "Daftar Harga";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);

    }

    // untuk menampilkan harga pulsa reguler axis dan xl
    public function axisxl(){
        $pulsaReguler = Price::where(['provider' => 'Axis & XL', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->paginate(15);
        $judul = "Harga Pulsa Axis & XL";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    // untuk menampilkan harga pulsa reguler Indosat
    public function indosat(){
        $pulsaReguler = Price::where(['provider' => 'Indosat', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->paginate(15);
        $judul = "Harga Pulsa Indosat";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function smartfren(){
        $pulsaReguler = Price::where(['provider' => 'Smartfren', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->paginate(15);
        $judul = "Harga Pulsa Smartfren";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->paginate(15);
        $judul = "Harga Pulsa Telkomsel";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function tri(){
        $pulsaReguler = Price::where(['provider' => 'Tri', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->paginate(15);
        $judul = "Harga Pulsa Tri";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    
}
