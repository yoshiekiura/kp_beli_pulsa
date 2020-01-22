<?php

namespace App\Http\Controllers;

use App\UserEditProfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $cek = DB::table('users')->where('username',$request->session()->get('nama'))->first();
        //var_dump($cek);
        return view('/pelanggan/pages/profil',['panggil' => $cek]);
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
        $ids = DB::table('users')->where('id',$id)->first();
        return view('/pelanggan/forms/profil_edit',compact('ids'));
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

        $password = $request->input('password');
        $cekpassword = DB::table('users')->where('id',$id)->first();

        $request->validate([
            'password' => 'required'
        ]);

        if(Hash::check($password, $cekpassword->password)){

            $request->validate([
                'nama' => 'required|min:3|max:50',
                'username' => 'required|min:3|max:50',
                'email' => 'required|email',
                'nomor_telpon' => 'required|min:12|numeric'
            ]);

            UserEditProfil::where('id', $id)
            ->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telpon' => $request->nomor_telpon
        ]);
        Session::flash('Sukses','Berhasil Merubah Data Anda.');
        return redirect('/Profil');
        }
        else{
        Session::flash('password_salah','Password yang dimasukkan salah, masukkan password yang tepat');
            return redirect('/Pengaturan/'.$id);
        }
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

    public function editPwd($id){
        //
        $ids = DB::table('users')->where('id',$id)->first();
        return view('/pelanggan/forms/password_edit',compact('ids'));
    }

    public function updatePwd(Request $request, $id){

        $password = $request->input('pwd');
        $cekpassword = DB::table('users')->where('id',$id)->first();

        if(Hash::check($password, $cekpassword->password)){

            $request->validate([
                'pwd' => 'required|min:5',
                'pwd_baru' => 'required|min:5',
                'pwd_cek' => 'required|min:5'
            ]);

            $passwordbaru = $request->input('pwd_baru');
            $passwordcek = $request->input('pwd_cek');

            var_dump($passwordbaru);
            var_dump($passwordcek);


            if($passwordbaru == $passwordcek){

                    UserEditProfil::where('id', $id)
                    ->update([
                    'password' =>Hash::make($request->pwd_baru)
                    ]);
                    Session::flash('Sukses','Berhasil Merubah Password Anda.');
                    return redirect('/Profil');
            }
            else{
                Session::flash('password_salah','Password yang dimasukkan tidak sama');
                return redirect('/Pengaturan/Pwd/'.$id);
            }
        }
        else{
            Session::flash('password_salah','Password yang dimasukkan salah, masukkan password yang tepat');
            return redirect('/Pengaturan/Pwd/'.$id);
        }
    }

    public function editPin($id){
        //
    }

    public function updatePin(Request $request, $id){
        //
    }
}
