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
        $data = DB::table('prices')->where($select,$value)->groupBy($dependent)->get();

        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $d){
            $output .= '<option value="'.$d->$dependent.'">'.$d->$dependent.'</option>';
        }
        echo $output;

    }
}
