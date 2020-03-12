@extends('layouts.form_customer')


@section('title',"TUKUPULSA.COM | Daftar")
@section('header',"Daftar")
@section('content')


<section class="about-area ptb-90" id="listHarga">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Lengkapi form dibawa ini untuk mendaftar pada TUKUPULSA.COM. Gratis</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single-about-box">
                    <i class="icofont icofont-login"></i>
                    <h4>Daftar Akun TUKUPULSA</h4>
                    <form method="post" action="/postDaftar">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Pengguna</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control-plaintext" id="nama" placeholder="Nama Pengguna">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" name="no_telpon" class="form-control-plaintext" id="nohp" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control-plaintext" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control-plaintext" id="pwd" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwdKonfirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_konfirm" class="form-control-plaintext" id="pwdKonfirm" placeholder="Konfirmasi Password">
                            </div>
                        </div>
                        <input type="submit" value="Daftar" class="btn btn-outline-success btn-lg btn-block mb-3"></button>
                    </form>
                    <p>Sudah punya akun sebelumnya? <a href="/login" class="text-warning mt-3">Login disini</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
