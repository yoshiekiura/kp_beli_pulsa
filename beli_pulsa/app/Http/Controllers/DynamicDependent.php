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

        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $d){
            $output .= '<option value="'.$d->$dependent.'">'.$d->$dependent.'</option>';
        }
        echo $output;

    }

    function kirim(Request $request){

        $siap = $request->input('keterangan');

        $cek = DB::table('price_lists')->where('keterangan',$siap)->get(['kode','harga']);
        var_dump($cek);
        die;


    }
}
