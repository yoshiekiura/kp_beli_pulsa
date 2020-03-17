<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function postLogin(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }else{
            Session::flash('Kesalahan','Masukkan Email atau Password dengan Benar');
            //var_dump($_SESSION['Kesalahan']); die;
            return redirect('/');
        }
    }

    public function logOut(){
        Auth::logout();
        Session::flash('Kesalahan','Berhasil Logout');
        return redirect('/');
    }
}
