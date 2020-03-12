<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Price;
use Illuminate\Support\Facades\DB;

class HargaController extends Controller
{
    // untuk menampilkan harga produk keseluruhan
    public function index(){
        //$price = Price::all();
        $price = DB::table('price_lists')
        ->where('pulsa_type','data')
        ->orWhere('pulsa_type','pulsa')
        ->get();

        // ->join('products','price_lists.id_product' ,'=', 'products.id')
        // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
        // ->get(['nama_produk','nama_provider','keterangan','harga','status']);
        $judul = "Daftar Harga";
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    }

    public function pulsa(){
        $price = DB::table('price_lists')
        ->Where('pulsa_type','pulsa')
        ->get();
        $judul = "Daftar Harga Pulsa";
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    }

    public function data(){
        $price = DB::table('price_lists')
        ->Where('pulsa_type','data')
        ->get();
        $judul = "Daftar Harga Data";
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    }

    // // untuk menampilkan harga pulsa reguler axis dan xl
    // public function axisxl(){
    //     //$pulsaReguler = Price::where(['provider' => 'Axis & XL', 'detail_produk' => 'Pulsa Reguler']);
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Axis dan XL', 'nama_produk' => 'Pulsa Reguler'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     //$price = $pulsaReguler->get();
    //     $judul = "Harga Pulsa Axis & XL";
    //     //$arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // // untuk menampilkan harga pulsa reguler Indosat
    // public function indosat(){
    //     // $pulsaReguler = Price::where(['provider' => 'Indosat', 'detail_produk' => 'Pulsa Reguler']);
    //     // $price = $pulsaReguler->get();
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat', 'nama_produk' => 'Pulsa Reguler'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Pulsa Indosat";
    //     //$arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function smartfren(){
    //     // $pulsaReguler = Price::where(['provider' => 'Smartfren', 'detail_produk' => 'Pulsa Reguler']);
    //     // $price = $pulsaReguler->get();
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Smartfren', 'nama_produk' => 'Pulsa Reguler'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Pulsa Smartfren";
    //     //$arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel(){
    //     // $pulsaReguler = Price::where(['provider' => 'Telkomsel', 'detail_produk' => 'Pulsa Reguler']);
    //     // $price = $pulsaReguler->get();
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel', 'nama_produk' => 'Pulsa Reguler'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Pulsa Telkomsel";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function tri(){
    //     // $pulsaReguler = Price::where(['provider' => 'Tri', 'detail_produk' => 'Pulsa Reguler']);
    //     // $price = $pulsaReguler->get();
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Tri', 'nama_produk' => 'Pulsa Reguler'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Pulsa Tri";
    //     //$arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function axis_bronet(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Axis (Bronet)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Axis (Bronet)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function axis_keren_zmua(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Axis (Keren Zmua)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Axis (Keren Zmua)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function axis_owsem(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Axis (Owsem)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Axis (Owsem)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function paket_indosat(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat (Fix)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Indosat (Fix)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function indosat_unlimit(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat (Unlimited)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Indosat (Unlimited)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function indosat_new_freedom_30hr(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat (New Freedom 30Hr)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Indosat (New Freedom 30Hr)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function indosat_yellow(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat (Yellow)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Indosat (Yellow)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function indosat_mini(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat (Mini)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Indosat (Mini)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function indosat_freedom(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Indosat (Freedom)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Indosat (Freedom)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_mini(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Mini)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Mini)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_369(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (369)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (369)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }


    // public function telkomsel_as(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (As)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (As)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);

    // }

    // public function telkomsel_loop(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Loop)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Loop)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);

    // }

    // public function telkomsel_simpati(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Simpati)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Simpati)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_vas(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Vas)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Vas)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_hari(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Hari)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Hari)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }


    // public function telkomsel_bulan(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Bulan)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Bulan)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_combo(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Combo)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Combo)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_bulk_zona_1_8(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Bulk Zona 1-8)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Bulk Zona 1-8)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_bulk_zona_1_10(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Bulk Zona 1-10)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Bulk Zona 1-10)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_bulk_zona_1_11(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Bulk Zona 1-11)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Bulk Zona 1-11)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_bulk_all_zona(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Bulk All Zona)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Bulk All Zona)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_malam_00_07(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Malam 00-07)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Malam 00-07)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function telkomsel_fix(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Telkomsel (Fix)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Telkomsel (Fix)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function pake_smartfren(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Smartfren', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Smartfren";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function aktivasi_kpk_tri(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Aktivasi KPK (Kartu Perdana Kosong) Tri', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Aktivasi KPK (Kartu Perdana Kosong) Tri";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function tri_mini(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Tri (Mini)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Tri (Mini)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function tri_aon(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Tri (Aon)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Tri (Aon)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function tri_biasa(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Tri (Biasa)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Tri (Biasa)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function tri_getmore(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Tri (Getmore)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Tri (Getmore)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function tri_khusus(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'Tri (Khusus)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet Tri (Khusus)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function xl_combo(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'XL (Combo)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet XL (Combo)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }

    // public function xl_hotrod(){
    //     $price = DB::table('price_lists')
    //     ->join('products','price_lists.id_product' ,'=', 'products.id')
    //     ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
    //     ->where(['nama_provider' => 'XL (Hotrod)', 'nama_produk' => 'Paket Internet'])
    //     ->get(['nama_produk','nama_provider','keterangan','harga','status']);
    //     $judul = "Harga Paket Internet XL (Hotrod)";
    //     // $arr = array('price' => $price);
    //     return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);
    // }








}
