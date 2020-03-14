<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    function cari(Request $request){

        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = DB::table('price_lists')
        // ->join('products','price_lists.id_product' ,'=', 'products.id')
        // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
        ->where($select,$value)->groupBy($dependent)->get();
        //$data = DB::table('price_lists')->where($select,$value)->groupBy($dependent)->get();

        //$output = '<option value="">Select '.ucfirst($dependent).'</option>';
        $output = '<option value="">--Silahkan Pilih--</option>';
        foreach($data as $d){
            $output .= '<option value="'.$d->pulsa_code.'">'.$d->$dependent.'</option>';
        }
        echo $output;

    }

    function bawaKodeHarga(Request $request){
        $kode = $request->get('keterangan');

        $data_price = DB::table('price_lists')
        // ->join('products','price_lists.id_product' ,'=', 'products.id')
        // ->join('providers','price_lists.id_provider' ,'=', 'providers.id')
        ->where('pulsa_code',$kode)->get();

        foreach($data_price as $d){
            $data['masaaktif'] = $d->masaaktif;
            $data['pulsa_price'] = $d->pulsa_price;
            $data['pulsa_code'] = $d->pulsa_code;
            // $data['pulsa_op'] = $d->pulsa_op;
            // $data['pulsa_nominal'] = $d->pulsa_nominal;
        }

        echo json_encode($data);
    }

    function kirim_transaksi(Request $request){
        $nomor = $request->get('nomor');
        // $result = DB::table('transactions')->where('no_telpon',$nomor)
        // ->get();

        return redirect('/Cek-transaksi/'.$nomor);
        // return view('/pelanggan/forms/cek_transaksi',['data' => $result]);
    }

    function tampil_transaksi($nomor){
        $result = DB::table('transactions')->where('no_telpon',$nomor)
        ->get();

        // $result = DB::table('transactions')->where('no_telpon','like','%'.$nomor.'%')
        // ->get();
        // var_dump($result);
        if($result){
            return view('/pelanggan/forms/cek_transaksi',['data' => $result]);
        }else{
            // var_dump($result);
            $kosong = 'tidak ada';
            return view('/pelanggan/forms/cek_transaksi',['data' => $kosong]);
        }
        // return view('/pelanggan/forms/cek_transaksi',['data' => $result]);
    }

    function tampil_hasil_rincian($id){

        $result = DB::table('transactions')
        ->join('price_lists','price_lists.pulsa_code' ,'=', 'transactions.pulsa_code')
        ->join('banks','banks.id' ,'=', 'transactions.id_bank')
        ->where('transactions.id',$id)
        ->first();
            // var_dump($result);
        // $result = DB::table('transactions')->where('no_telpon','like','%'.$nomor.'%')
        // ->get();
        // var_dump($result);
        // if($result){
        //     return view('/pelanggan/pages/rincian',['data' => $result]);
        // }else{
        //     // var_dump($result);
        //     $kosong = 'tidak ada';
        //     return view('/pelanggan/forms/cek_transaksi',['data' => $kosong]);
        // }
        return view('/pelanggan/pages/rincian',['hasil' => $result]);
    }
}
