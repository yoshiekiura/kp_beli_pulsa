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
                    @if(Session::has('gagal'))
                        <p class="login-box-msg mb-3">{!! session('gagal') !!}</p>
                    @endif
                    @if(Session::has('Sukses'))
                        <p class="login-box-msg">{!! session('Sukses') !!}</p>
                    @endif
                    @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <p class="login-box-msg mb-3">{{ $error }}</p>
                            @endforeach
                        
                    @endif
                    <form method="POST" action="/postLogin">
                        @csrf
                        <div class="form-group row">
                            <label for="telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control-plaintext" value="{{ old('no_telpon') }}" id="telp" name="no_telpon" placeholder="Contoh: 085X-XXXX-XXXX" min="0" maxlength="13" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control-plaintext" id="pwd" placeholder="Contoh: password" minlength="8" required name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwdKonfirm" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control-plaintext" id="pwdKonfirm" placeholder="Masukkan password diatas" minlength="8" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-success btn-lg btn-block mb-3" value="Login"></input>
                    </form>
                    <a href="#" class="text-warning" data-toggle="modal" data-target="#lupaPassword">Lupa Password ?</a>
                    <p>Belum punya akun TUKUPULSA? <a href="/daftar" class="text-warning mt-3">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="lupaPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lupa password akun anda ?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{ url('/Lupa_password') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="hapus">Silakan masukkan email pada isian dibawah !</label>
                        <input id="hapus" type="text" placeholder="Masukkan Email Anda" name="email" class="form-control input-sm mt-4">
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 0px;">Reset Password</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection
