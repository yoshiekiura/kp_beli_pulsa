@extends('layouts.form_customer')


@section('title',"TUKUPULSA.COM | Login")
@section('header',"Login")
@section('content')


<section class="about-area ptb-90" id="listHarga">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Masukkan username dan password anda yang sudah terdaftar pada TUKUPULSA.COM</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single-about-box">
                    <i class="icofont icofont-login"></i>
                    <h4>Login Akun TUKUPULSA</h4>
                    <form>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" id="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control-plaintext" id="pwd" placeholder="Password">
                            </div>
                        </div>
                        <a href="/beli"><button type="button" class="btn btn-outline-success btn-lg btn-block mb-3">Login</button></a>
                    </form>
                    <a href="#" class="text-warning">Lupa Password ?</a>
                    <p>Belum punya akun TUKUPULSA? <a href="/daftar" class="text-warning mt-3">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
