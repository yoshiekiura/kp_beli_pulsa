<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use PDF;

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

        return redirect('/cek_transaksi/nomor-telp/'.$hasil);
    }

    public function hasilRiwayatLuar($enkripsi){

        $decrypt = Crypt::decrypt($enkripsi);
        // var_dump($decrypt);die;
        $hasil = DB::table('transactions')
        // ->join('users','users.id','=', 'transactions.id_user')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->where('transactions.no_telpon',$decrypt)
        ->get();

        // var_dump($hasil); die;
        // $id = DB::table('transactions')
        // // ->join('users','users.id','=', 'transactions.id_user')
        // ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // // ->join('banks','banks.id','=', 'transactions.id_bank')
        // ->where('transactions.no_telpon',$decrypt)
        // ->get();

        // var_dump($hasil);die;

        if($hasil->count()>0){
            // $hasilid = Crypt::encrypt($id[0]->id);
            // var_dump($id[0]->id); die;
            return view('forms/cek_transaksi',['data' => $hasil]);
        }else{
            return view('forms/cek_transaksi',['data' => $hasil]);
        }

        // var_dump($hasilid); die;

    }

    public function hasilRiwayat($id){

        $var = base64_decode($id);
        $data = Crypt::encrypt($var);
        // var_dump($var);die;

        // $hasil = DB::table('transactions')
        // // ->select('transactions.id AS id')
        // // ->join('users','users.id','=', 'transactions.id_user')
        // ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        // ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        // ->where('transactions.id',$id)
        // ->first();

        return redirect('/rincian-luar/'.$data);
        // var_dump($hasil); die;
        // var_dump($hasil); die;

    }

    public function rahasia($data){
        $encrip = Crypt::decrypt($data);
        // var_dump($encrip); die;

        $hasil = DB::table('transactions')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->where('transactions.id',$encrip)
        ->first();

        return view('/pages/detail_transaction',['hasil' => $hasil, 'data' => $data]);
    }



    public function tampilRiwayat(){

        $ambilId = Auth()->user()->id;
        // var_dump($ambilId); die;
        $hasil = DB::table('transactions')->where('transactions.id_user',$ambilId)
        // ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->get();

        return view('/pages/history_transaction_customer',['data' => $hasil]);
        

        // var_dump($idTransaksi); die;


    }

    public function tampilRincian_Customer($id){

        $var = base64_decode($id);
        $data = Crypt::encrypt($var);

        return redirect('/rincian-customer/'.$data);

    }

    public function rincian_customerDalam($data){

        $ambilId1 = Crypt::encrypt(Auth()->user()->id);

        $decrypt = Crypt::decrypt($data);

        $data = DB::table('transactions')
        ->join('banks','banks.id_bank','=', 'transactions.id_bank')
        ->join('price_lists','price_lists.pulsa_code','=', 'transactions.pulsa_code')
        ->where('transactions.id',$decrypt)
        ->first();

        // var_dump($hasil); die;

        $ambilId = DB::table('transactions')
        ->select('transactions.id')
        ->where('transactions.id',$decrypt)
        ->join('banks','transactions.id_bank','=','banks.id_bank')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();
        $hasilId = Crypt::encrypt($ambilId);

        return view('/pages/rincian_transaction_customer',['hasil' => $data, 'id' => $ambilId1, 'ambilId' => $hasilId]);
    }

    public function cetak_pdf($ambilId){

        $id = Crypt::decrypt($ambilId);
        // var_dump($id->id); die;
        $hasil = DB::table('transactions')->where('transactions.id',$id)
        ->join('banks','transactions.id_bank','=','banks.id_bank')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();
        // var_dump($hasil); die;

        $pdf = PDF::loadview('cetak_pdf',['hasil'=>$hasil]);
    	return $pdf->download('laporan-transaksi-pdf');
    }

}
