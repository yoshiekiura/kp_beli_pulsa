<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliController extends Controller
{
    //
    function beli(Request $request){
        $telp  =    $request->  input('nomor');
        $harga =    $request->  input('harga');
        $kode  =    $request->  input('kode');
        $bank  =    $request->  input('bank');
        var_dump($kode,$harga,$telp,$bank);
        die;
    }
    // function beliPaket(Request $request){
    //     $telp  =    $request->  input('nomor');
    //     $harga =    $request->  input('harga');
    //     $kode  =    $request->  input('kode');
    //     $bank  =    $request->  input('bank');
    //     var_dump($kode,$harga,$telp,$bank);
    //     die;
    // }
}
