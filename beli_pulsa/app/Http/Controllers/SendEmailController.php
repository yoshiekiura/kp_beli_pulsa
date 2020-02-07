<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Mail\SendForgotMail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\UserEditProfil;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cek = DB::table('users')->select('email')->where('username',Session::get('nama'))->first();
        
        // var_dump($cek);
        Mail::to($cek)->send(new SendEmail());
        Session::flash('Sukses','Verifikasi akun anda melalui Email sudah dikirim.');
		return redirect('/Profil');
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

    public function lupa_password(Request $request){

        $email = $request-> input('email');
        $cek_email = DB::table('users')->where('email', $email)->first();
        $select_email = DB::table('users')->select('email')->where('email', $email)->first();

        if($cek_email){
            $kode = Hash::make(Str::random(10));

            UserEditProfil::where('email', $email)
                ->update([
                'kode' => $kode
                ]);

        $data = ['email' => $email];
        Mail::to($select_email)->send(new SendForgotMail($data));
        Session::flash('Sukses','Cek email anda untuk mengembalikan kata sandi yang baru.');
		return redirect('/Login/create');
            
        }else{
            Session::flush(); 
            Session::flash('Kesalahan','Email yang anda masukkan salah');
            return redirect('/Login/create');
        }

    }

    public function proses_lupa_password(Request $request){
        $this->validate($request,[
            'password' => 'required|alpha_num|confirmed|min:8'
    ]);

    $cek_data = DB::table('users')->where('email',Session::get('email'))->first();

    if($cek_data){

        UserEditProfil::where('email', Session::get('email'))
                ->update([
                'password' => Hash::make($request -> password)
                ]);
        Session::flush();           
        Session::flash('Sukses','Kata sandi berhasil diganti, coba masuk kembali.');
        return redirect('/Login/create');
    }else{
        Session::flush(); 
        Session::flash('Kesalahan','Email yang anda masukkan salah');
        return redirect('/Login/create');
    }
    }
}
