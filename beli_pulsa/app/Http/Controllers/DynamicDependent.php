<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    function index(){

        // $produk = DB::table('prices')
        //             ->groupBy('detail_produk')->get();
        //             return view('/pelanggan/pages/halaman_utama_pelanggan')->with('produk',$produk);

    }

    function cari(Request $request){

        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = DB::table('price_lists')
        ->join('products','price_lists.id_product' ,'=', 'products.id')
        ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
        ->where($select,$value)->groupBy($dependent)->get();
        //$data = DB::table('price_lists')->where($select,$value)->groupBy($dependent)->get();

        //$output = '<option value="">Select '.ucfirst($dependent).'</option>';;
        $output = '<option value="">--Silahkan Pilih--</option>';
        foreach($data as $d){
            $output .= '<option value="'.$d->kode.'">'.$d->$dependent.'</option>';
        }
        echo $output;

    }

    function bawaKodeHarga(Request $request){
        $kode = $request->get('keterangan');

        $data_price = DB::table('price_lists')
        ->join('products','price_lists.id_product' ,'=', 'products.id')
        ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
        ->where('kode',$kode)->get();

        foreach($data_price as $d){
            $data['harga'] = $d->harga;
            $data['kode'] = $d->kode;
            $data['nama_produk'] = $d->nama_produk;
            $data['keterangan'] = $d->keterangan;
        }

        echo json_encode($data);
    }

}
