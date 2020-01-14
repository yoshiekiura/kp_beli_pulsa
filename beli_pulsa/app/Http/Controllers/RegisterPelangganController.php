<?php

namespace App\Http\Controllers;

use App\Daftar;
use \Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Forms-Register
        return view('/pelanggan/forms/daftar_pelanggan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|min:3|max:50',
            'no_telpon' => 'required|min:12|numeric',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5',
        ]);

        $username = $request -> input('username');
        $no_telpon = $request -> input('no_telpon');
        $email = $request -> input('email');

        $cek_user = Daftar::where('username', $username)->first();
        $cek_email = Daftar::where('email', $email)->first();
        $cek_no_telpon = Daftar::where('no_telpon', $no_telpon)->first();

        if($cek_user){
            Session::flash('Kesalahan','Username Sudah ada');
            return redirect('/Register/create');
        }elseif($cek_no_telpon){
            Session::flash('Kesalahan','Nomor telfon Sudah ada');
            return redirect('/Register/create');
        }elseif($cek_email){
            Session::flash('Kesalahan','Email Sudah ada');
            return redirect('/Register/create');
        }else{

            $tambah = new Daftar;

            $tambah->nama = $request -> username;
            $tambah->username = $request -> username;
            $tambah->password = Hash::make($request -> password);
            $tambah->email = $request -> email;
            $tambah->no_telpon = $request -> no_telpon;
            $tambah->status_akun = "Belum Terverifikasi";
            $tambah->tanggal_mendaftar = Carbon::now();

            $tambah->save();
            Session::flash('Berhasil','Akun anda sudah dibuat. Silakan Masuk kembali.');
            return redirect('/Register/create');

            // User::create([
            //     'nama'                 => $request -> username,
            //     'username'             => $request -> username,
            //     'password'             =>  Hash::make($request -> password),
            //     'email'                => $request -> email,
            //     'jenis_kelamin'        => '',
            //     'alamat'               => '',
            //     'no_telfon'            => $request -> no_telpon,
            //     'status_akun'          => '',
            //     'pemberitahuan'        => '',
            //     'total_transaksi'      => '',
            //     'tanggal_mendaftar'    => Carbon::now(),
            //     'status'               => ''
            // ]);
            // return redirect('/Register/create');
        }

        // User::create(request()->only('username','no_telpon','email','password'));

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
