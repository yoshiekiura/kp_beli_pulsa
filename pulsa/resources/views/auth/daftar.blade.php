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
                    @if(Session::has('gagal'))
                        <p class="login-box-msg mb-3">{!! session('gagal') !!}</p>
                    @endif
                    @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <p class="login-box-msg mb-3">{{ $error }}</p>
                            @endforeach
                        
                    @endif
                    <form method="post" action="/postDaftar">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Pengguna</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="{{ old('nama') }}" class="form-control-plaintext" id="nama" placeholder="Contoh: Tuku Pulsa" minlength="5" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" name="no_telpon" value="{{ old('no_telpon') }}" class="form-control-plaintext" id="nohp" placeholder="Contoh: 085X-XXXX-XXXX" min="0" maxlength="13" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control-plaintext" value="{{ old('email') }}" id="email" placeholder="Contoh: XXXXXX@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control-plaintext" id="pwd" placeholder="Contoh: password" minlength="8" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwdKonfirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control-plaintext" id="pwdKonfirm" placeholder="Masukkan password diatas" minlength="8" required>
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
