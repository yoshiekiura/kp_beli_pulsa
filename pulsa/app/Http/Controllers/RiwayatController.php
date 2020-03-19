<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class RiwayatController extends Controller
{
    public function cari(Request $request){

        // $cari = "";
        $cari = $request->input('nomor');
        // var_dump($cari); die;
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$cari)
        ->get();
        return view('forms/cek_transaksi',['data' => $hasil]);
    }

    public function no_rahasia(Request $request){

        $cari = $request->input('nomor');
        $hasil = Crypt::encrypt($cari);

        return redirect('/cek_transaksi/luar/'.$hasil);
    }

    public function hasilRiwayatLuar($enkripsi){

        $decrypt = Crypt::decrypt($enkripsi);
        // var_dump($decrypt);die;
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$decrypt)
        ->get();

        $id = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$decrypt)
        ->get();

        if($id->count()>0){
            $hasilid = Crypt::encrypt($id[0]->id);
            return view('forms/cek_transaksi',['data' => $hasil, 'dataId' => $hasilid]);
        }else{
            return view('forms/cek_transaksi',['data' => $hasil]);
        }
        
        // var_dump($hasilid); die;
        
    }



    public function tampilRiwayat($id){

        $ambilId = Crypt::encrypt(Auth()->user()->id);

        $decrypt = Crypt::decrypt($id);

        $hasil = DB::table('transactions')->where('transactions.id_user',$decrypt)
        // ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->get();

        if($hasil->count()>0){
            $idTransaksi = Crypt::encrypt($hasil[0]->id);
            return view('/pages/history_transaction_customer',['data' => $hasil,'id' => $ambilId, 'idTransaksi' => $idTransaksi]);
        }else{
            return view('/pages/history_transaction_customer',['data' => $hasil,'id' => $ambilId]);
        }

        
        // var_dump($idTransaksi); die;

        
    }

    public function tampilRincian_Customer($id){

        $ambilId = Crypt::encrypt(Auth()->user()->id);

        $decrypt = Crypt::decrypt($id);

        $data = DB::table('transactions')->where('transactions.id',$decrypt)
        ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();
        // var_dump($hasil); die;

        return view('/pages/rincian_transaction_customer',['hasil' => $data, 'id' => $ambilId]);
    }
    

    public function hasilRiwayat($data){
        
        $id = Crypt::decrypt($data);
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->join('banks','banks.id','=', 'transactions.id_bank')
        ->where('transactions.id',$id)
        ->first();

        // var_dump($hasil); die;
        return view('/pages/detail_transaction',['hasil' => $hasil]);

    }

}
