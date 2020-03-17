<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Customer;

class AuthController extends Controller
{
    public function postLogin(Request $request){
        $this->validate($request,[
            'no_telpon' => 'required|numeric|min:0',
            'password' => 'required|confirmed|min:8'
        ]);

        if(Auth::attempt($request->only('no_telpon','password'))){
            return redirect('/beli');
        }
        Session::flash('gagal','Masukkan Nomor Telepon atau Password dengan Benar');
        return redirect('/login');
    }

    public function postDaftar(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5',
            'no_telpon' => 'required|numeric|min:0',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        // var_dump($request->password); die;
        $telp = $request->input('no_telpon');
        $email = $request->input('email');

        $cek = DB::table('users')
        ->where('no_telpon', $telp)
        ->orWhere('email', $email)
        ->get();

        // var_dump(count($cek)); die;
        if(count($cek)!=0){
            Session::flash('gagal','Nomor Telepon atau Email Sudah Terdaftar');
            return redirect('/daftar');
        } else {

            $user = new User;
            $user->role = "customer";
            $user->no_telpon = $request->no_telpon;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(60);
            $user->save();
            $request->request->add(['id_user' => $user->id,'tanggal_mendaftar' => Carbon::now(),'status_akun' => '0']);
            $customer = Customer::create($request->all());
            // var_dump($customer); die;
            Session::flash('gagal','Akun telah Terdaftar! Silahkan Login');
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        Session::flash('gagal','Anda Logout !');
        return redirect('/login');
    }
}
