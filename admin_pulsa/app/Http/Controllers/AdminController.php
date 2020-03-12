<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $bank = DB::table('banks')->count();
        $customer = DB::table('users')->where('role','customer')->count();
        $harga = DB::table('price_lists')->count();
        return view('pages/index',['bank'=>$bank,'customer'=>$customer,'harga'=>$harga]);
    }

    public function transaksiPembelian(){
        return view('/pages/purchase');
    }

    public function daftarPelanggan(){
        $customer = DB::table('users')->where('role','customer')->get();
        return view('/pages/list_customer',['customer'=>$customer]);
    }

    public function komplain(){
        return view('/pages/complain');
    }

}
