<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function tampilProfil(){
        // $id = Crypt::decrypt($id);
        $profil = Customer::where('id_user',Auth()->user()->id)->get();
        // var_dump($profil); die;
        return view('pages/profil_customer',compact('profil'));
    }

    public function pengaturanAkun(){
        $customer = Customer::where('id_user',Auth()->user()->id)->get();
        // $users = User::where('id',Auth()->user()->id)->get();

        // var_dump($users);
        // die;
        return view('forms/setting_customer',['customer'=>$customer]);
    }

    public function editProfil(Request $request){
        $request->validate([
            'password' => 'required'
        ]);

        $pwd = $request->input('password');
        $cek = User::where('id', Auth()->user()->id)->first();
        // var_dump($cek);
        if(Hash::check(($pwd),$cek->password)){

            $request->validate([
                'nama' => 'required|min:5|max:50',
            ]);

            Customer::where('id_user', Auth()->user()->id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin
            ]);

        Session::flash('gagal','Berhasil Merubah Data Anda.');
        return redirect('/profil');
        }
        Session::flash('gagal','Password yang dimasukkan salah, masukkan password yang tepat');
        return redirect('/pengaturan-akun');

    }
    public function editPassword(Request $request){
        //
        $pwdlama = $request->input('password_lama');
        $cek_pwd_lama = User::where('id', Auth()->user()->id)->first();

        if(Hash::check($pwdlama,$cek_pwd_lama->password)){

            $request->validate([
                'password_lama' => 'required|min:8',
                'password_baru' => 'required|min:8',
                'password_cek' => 'required|min:8'
            ]);

            $pwdbaru = $request->input('password_baru');
            $pwdcek = $request->input('password_cek');

            if($pwdbaru == $pwdcek){

                User::where('id', Auth()->user()->id)
                ->update([
                    'password' => Hash::make($request->password_baru)
                ]);

                return redirect('/profil');
            }else{
                Session::flash('gagal','Password yang dimasukkan tidak sama');
                return redirect('pengaturan-akun#pills-pwd');
            }
        }else{
            Session::flash('gagal','Password yang dimasukkan salah, masukkan password yang tepat');
            return redirect('pengaturan-akun#pills-pwd');
        }

        // var_dump($cek_pwd_lama);
    }
}
