<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use Illuminate\Support\Facades\DB;

class HargaController extends Controller
{
    // untuk menampilkan harga produk keseluruhan
    public function index(){
        //$price = Price::all();
        $price = DB::table('price_lists')
        ->join('products','price_lists.id_product' ,'=', 'products.id')
        ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
        ->get(['nama_produk','nama_provider','keterangan','harga','status']);
        $judul = "Daftar Harga";
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $price]);

    }

    // untuk menampilkan harga pulsa reguler axis dan xl
    public function axisxl(){
        $pulsaReguler = Price::where(['provider' => 'Axis & XL', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->get();
        $judul = "Harga Pulsa Axis & XL";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    // untuk menampilkan harga pulsa reguler Indosat
    public function indosat(){
        $pulsaReguler = Price::where(['provider' => 'Indosat', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->get();
        $judul = "Harga Pulsa Indosat";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function smartfren(){
        $pulsaReguler = Price::where(['provider' => 'Smartfren', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->get();
        $judul = "Harga Pulsa Smartfren";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->get();
        $judul = "Harga Pulsa Telkomsel";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function tri(){
        $pulsaReguler = Price::where(['provider' => 'Tri', 'detail_produk' => 'Pulsa Reguler']);
        $price = $pulsaReguler->get();
        $judul = "Harga Pulsa Tri";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function axis_bronet(){
        $pulsaReguler = Price::where(['provider' => 'Axis (Bronet)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Axis (Bronet)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function axis_keren_zmua(){
        $pulsaReguler = Price::where(['provider' => 'Axis (Keren Zmua)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Axis (Keren Zmua)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function axis_owsem(){
        $pulsaReguler = Price::where(['provider' => 'Axis (Owsem)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Axis (Owsem)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function paket_indosat(){
        $pulsaReguler = Price::where(['provider' => 'Indosat', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Indosat";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function indosat_unlimit(){
        $pulsaReguler = Price::where(['provider' => 'Indosat (unlimit)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Indosat (unlimit)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function indosat_new_freedom_30hr(){
        $pulsaReguler = Price::where(['provider' => 'Indosat (New Freedom 30Hr)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Indosat (New Freedom 30Hr)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function indosat_yellow(){
        $pulsaReguler = Price::where(['provider' => 'Indosat (Yellow)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Indosat (Yellow)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function indosat_lainnya(){
        $pulsaReguler = Price::where(['provider' => 'Indosat (Lainnya)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Indosat (Lainnya)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function indosat_freedom(){
        $pulsaReguler = Price::where(['provider' => 'Indosat (Freedom)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Indosat (Freedom)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_mini(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Mini)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Mini)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_369(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (369)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (369)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_zona_1_11(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Zona 1-11)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Zona 1-11)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_as(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (As)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (As)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_loop(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Loop)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Loop)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_simpati(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Simpati)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Simpati)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_add(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Add)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Add)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_bulan(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Bulan)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Bulan)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_combo(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Combo)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Combo)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomse_hari(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Hari)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Hari)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_zona_1_8(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Zona 1-8)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Zona 1-8)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_zona_1_10(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Zona 1-10)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Zona 1-10)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_bulk_tsel_semua_zona(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Bulk Tsel Semua Zona)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Bulk Tsel Semua Zona)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_depok(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Depok)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Depok)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_data_malam_00_07(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Data Malam 00-07)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Data Malam 00-07)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function telkomsel_fix(){
        $pulsaReguler = Price::where(['provider' => 'Telkomsel (Fix)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Telkomsel (Fix)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function paket_smartfren(){
        $pulsaReguler = Price::where(['provider' => 'Smartfren', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Smartfren";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_kpk_kartu_perdana_kosong(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri KPK(Kartu Perdana Kosong)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri KPK(Kartu Perdana Kosong)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_mini(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Mini)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Mini)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_aon(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Aon)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Aon)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_cinta(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Cinta)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Cinta)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_anynet(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Anynet)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Anynet)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_getmore(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Getmore)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Getmore)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_khusus(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Khusus)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Khusus)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function three_tri_extra_kuota(){
        $pulsaReguler = Price::where(['provider' => 'Three/Tri (Extra Kuota)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet Three/Tri (Extra Kuota)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function xl_combo(){
        $pulsaReguler = Price::where(['provider' => 'XL (Combo)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet XL (Combo)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }

    public function xl_hotrod(){
        $pulsaReguler = Price::where(['provider' => 'XL (Hotrod)', 'detail_produk' => 'Paket Internet']);
        $price = $pulsaReguler->get();
        $judul = "Harga Paket Internet XL (Hotrod)";
        $arr = array('price' => $price);
        return view('pelanggan/pages/halaman_produk',['judul' => $judul, 'arr' => $arr]);
    }





}
