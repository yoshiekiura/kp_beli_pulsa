<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function cari(Request $request){

        // $cari = "";
        $cari = $request->  input('nomor');
        // var_dump($cari); die;
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$cari)
        ->get();
        return view('forms/cek_transaksi',['data' => $hasil]);
    }

    public function tampilRiwayat(Request $request){

        $hasil = DB::table('transactions')->where('transactions.id_user',$request->id)
        // ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->get();

        return view('/pages/history_transaction_customer',['data' => $hasil]);
    }

    public function tampilRincian_Customer(Request $request){

        $data = DB::table('transactions')->where('transactions.id',$request->id)
        ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();
        // var_dump($hasil); die;

        return view('/pages/rincian_transaction_customer',['hasil' => $data]);
    }
    



    public function hasilRiwayat(Request $request){
        
        $hasil = DB::table('transactions')
        ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.id',$request->id)
        ->get();
        var_dump($hasil); die;
        return view('forms/cek_transaksi',['data' => $hasil]);
    }
}
