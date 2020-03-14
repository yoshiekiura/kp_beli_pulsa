<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;
use Illuminate\Support\Facades\Crypt;

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
}
