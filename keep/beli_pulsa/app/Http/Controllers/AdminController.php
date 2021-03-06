<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/forms/login_admin');
    }

    public function home(){
        return view('/admin/pages/dashboard_admin');
    }

    public function lihat(){
        $user = User::All();
        return view ('admin/pages/daftar_pelanggan',compact('user'));
    }

    public function komplain(){
        $user = DB::table('complaints')->get();

        return view ('admin/pages/daftar_komplain',compact('user'));
    }

    public function transaksi_pembelian(){

        $data = DB::table('transactions')
        ->join('price_lists','price_lists.pulsa_code' ,'=', 'transactions.pulsa_code')
        ->join('banks','banks.id' ,'=', 'transactions.id_bank')
        // ->where('pulsa_type','pulsa')
        // ->where('status','active')
        // ->groupBy('pulsa_op')
        ->get();

        // $data = DB::table('transactions')->get();

        return view ('admin/pages/daftar_transaksi',['hasil' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request -> input('username');
        $password = $request -> input('password');

        $cek_password = Admin::where('username', $username)->first();

        if($cek_password && Hash::check($password, $cek_password->password)){
            Session::put('admin', $cek_password->nama);
            return redirect('/Admin/Home');
        }else{
            Session::flash('Kesalahan','Username dan Password yang anda Masukkan salah!');
            return redirect('/Login/Admin');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
