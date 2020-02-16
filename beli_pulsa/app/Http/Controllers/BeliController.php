<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;

class BeliController extends Controller
{
    //
    function beli(Request $request){

        $this->validate($request,[
            'nama_provider' => 'required',
            'voucher' => 'required',
            'nomor' => 'required|min:11|max:13',
            'bank' => 'required'
        ]);

        $nama_produk  =    $request->  input('nama_produk');
        $nama_provider  =    $request->  input('nama_provider');
        $voucher  =    $request->  input('keterangan');
        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');
        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        $tanggal_beli = Carbon::now();
        $kode_unik = $request-> input('aku');
        $dekripsi = base64_decode($kode_unik);

        $harga_total = $harga + $dekripsi;

        $tujuan_beli = DB::table('banks')->where('id',$bank)->first();
        // dd($request,$tanggal_beli,$tujuan_beli,$dekripsi,$harga_total);
        
        $hasil = array('nama_produk' => $nama_produk,
                       'nama_provider' => $nama_provider,
                       'voucher' => $voucher,
                       'telpon' => $telp,
                       'harga' => $harga,
                       'bank' => $bank,
                       'tanggal_beli' => $tanggal_beli,
                       'kode_unik' => $dekripsi,
                       'harga_total' => $harga_total,
                       'tujuan_beli' => $tujuan_beli                                  
    ); 
    return view('/pelanggan/pages/rincian',['hasil' => $hasil]);
    




        // var_dump($nama_produk,$nama_provider,$voucher,$telp,$harga,$bank,$tanggal_beli,$kode);
        // die;
    }

    // function beliPaket(Request $request){

    //     $this->validate($request,[
    //         'nama_provider' => 'required',
    //         'voucher' => 'required',
    //         'nomor' => 'required|min:11|max:13',
    //         'bank' => 'required'
    //         ]);

    //         $nama_produk  =    $request->  input('nama_produk');
    //         $nama_provider  =    $request->  input('nama_provider');
    //         $voucher  =    $request->  input('keterangan');
    //         $telp  =    $request->  input('nomor');
    //         $harga =    $request->  input('harga');
    //         $kode  =    $request->  input('kode');
    //         $bank  =    $request->  input('bank');
    //         $tanggal_beli = Carbon::now();
    //         $kode_unik = $request-> input('aku');
    //         $dekripsi = base64_decode($kode_unik);

    //         $harga_total = $harga + $dekripsi;

    //         $tujuan_beli = DB::table('banks')->where('id',$bank)->first();

    //         $hasil = array('nama_produk' => $nama_produk,
    //                    'nama_provider' => $nama_provider,
    //                    'voucher' => $voucher,
    //                    'telpon' => $telp,
    //                    'harga' => $harga,
    //                    'bank' => $bank,
    //                    'tanggal_beli' => $tanggal_beli,
    //                    'kode_unik' => $dekripsi,
    //                    'harga_total' => $harga_total,
    //                    'tujuan_beli' => $tujuan_beli); 
    //             return view('/pelanggan/pages/rincian',['hasil' => $hasil]);
    //     }

    function cetak_pdf(){

        $pdf = PDF::loadview('rincian_pdf');
        // return $pdf->download('laporan-rincian-pdf');
        return $pdf->stream();
    }

    function komplain(Request $request){
        // $pesan = Request::get('pesan');
        // $kode = Request::get('kode');
        // var_dump($pesan);
        $id_transaksi = $request -> input('id_transaksi');
        $nama = $request -> input('nama');
        $telp = $request -> input('telp');
        $pesan = $request -> input('pesan');
        $waktu = Carbon::now();
        
        DB::table('complaints')->insert([
            'id_transaksi' => $id_transaksi,
            'nama' => $nama,
            'no_telpon' => $telp,
            'pesan' => $pesan,
            'created_at' => $waktu,

        ]);

        return Redirect('/');
        //var_dump($id_transaksi,$nama,$telp,$pesan);
    }


    }