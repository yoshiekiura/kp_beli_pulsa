<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Transaction;

class BeliController extends Controller
{
    //
    public function beli(Request $request){

        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');

        do{
            $kode_unik = rand(100,500);
            $cek = DB::table('transactions')
            ->where('kode_unik',$kode_unik)
            ->where('status_pembayaran',  0)
            ->where('status_pengisian', 0)->get();
        }while($cek->count() != 0);

        // $dekripsi = base64_decode($kode_unik);
        $harga_total = $harga + $kode_unik;
        $tanggal_beli = Carbon::now();
        $expired = date('Y-m-d H:i:s',strtotime('+3 hour',strtotime($tanggal_beli)));

        // var_dump($kode,$bank,$telp,$harga,$kode_unik,$harga_total,$tanggal_beli,$expired);
        $kirim = Transaction::create([
        'pulsa_code' => $kode,
        'id_bank' => $bank,
        'no_telpon' => $telp,
        'kode_unik' => $kode_unik,
        'harga_total' => $harga_total,
        'status_pembayaran' => 0,
        'status_pengisian' => 0,
        'status_transaksi' => 0,
        'tanggal_beli' => $tanggal_beli,
        'expired' => $expired
        ])->id;

        return redirect('/rincian-transaksi/'.$kirim);
    }

    public function tampilBeli(Request $request){
        $hasil = DB::table('transactions')->where('transactions.id',$request->id)
        ->join('banks','transactions.id_bank','=','banks.id')
        ->join('price_lists','transactions.pulsa_code','=','price_lists.pulsa_code')
        ->first();

        // var_dump($hasil);
        // die;
        // return view('/pelanggan/pages/a',['hasil' => $hasil]);
        return view('/pages/detail_transaction',['hasil' => $hasil]);
    }
}
