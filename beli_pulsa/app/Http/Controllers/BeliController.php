<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BeliController extends Controller
{
    //
    function beliPulsa(Request $request){

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
        dd($request,$tanggal_beli,$tujuan_beli,$dekripsi,$harga_total);



        // var_dump($nama_produk,$nama_provider,$voucher,$telp,$harga,$bank,$tanggal_beli,$kode);
        // die;
    }
    function beliPaket(Request $request){

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
            dd($request,$tanggal_beli,$tujuan_beli,$dekripsi,$harga_total);
            // var_dump($nama_produk,$nama_provider,$voucher,$telp,$harga,$bank,$tanggal_beli,$kode);
            // die;
        }
    }
