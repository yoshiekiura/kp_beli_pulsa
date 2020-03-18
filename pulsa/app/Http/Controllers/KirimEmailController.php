<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendForgotMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class KirimEmailController extends Controller
{
    public function lupa_password(Request $request){

        $email = $request-> input('email');
        $cek_email = DB::table('users')->where('email', $email)->first();

        $select_email = DB::table('users')->select('email')->where('email', $email)->first();

        if($cek_email){
        $data = ['email' => $email];
        Mail::to($select_email)->send(new SendForgotMail($data));
        Session::flash('Sukses','Cek email anda, Permintaan Lupa Password sudah dikirim melalui email.');
		return redirect('/login');

        }else{
            Session::flush();
            Session::flash('Kesalahan','Email yang anda masukkan salah');
            return redirect('/login');
        }

    }


    public function proses_lupa_password(Request $request){
        $this->validate($request,[
            'password' => 'required|alpha_num|confirmed|min:8'
    ]);

    $cek_data = DB::table('users')->where('email',Session::get('email'))->first();

    if($cek_data){

        DB::table('users')->where('email', Session::get('email'))
                ->update([
                'password' => Hash::make($request -> password)
                ]);
        Session::flush();
        Session::flash('Sukses','Kata sandi berhasil diganti, coba masuk kembali.');
        return redirect('/login');
    }
    }


}
