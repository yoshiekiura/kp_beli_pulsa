<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliController extends Controller
{
    //
    function beli(Request $request){

        $this->validate($request,[
            'nama_provider' => 'required',
            'voucher' => 'required',
            'nomor' => 'required|min:12|numeric',
            'bank' => 'required'
        ]);

        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');
        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        var_dump($kode,$harga,$telp,$bank);
        die;
    }
}
