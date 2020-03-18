@extends('layouts.form_customer')


@section('title',"TUKUPULSA.COM | Lupa Password")
@section('header',"Lupa Password")
@section('content')


<section class="about-area ptb-90" id="listHarga">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Masukkan kata sandi baru untuk Akun anda!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single-about-box">
                    <i class="icofont icofont-login"></i>
                    <h4>Lupa Password Akun TUKUPULSA</h4>
                    @if(Session::has('gagal'))
                        <p class="login-box-msg">{!! session('gagal') !!}</p>
                    @endif
                    @if(Session::has('Sukses'))
                        <p class="login-box-msg">{!! session('Sukses') !!}</p>
                    @endif
                    <form method="POST" action="{{ url('/proses_lupa_password') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="telp" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control-plaintext" id="email" name="email"  value="{{$email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Masukkan kata sandi baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control-plaintext" id="pwd" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Ulangi kata sandi baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control-plaintext" id="pwd" placeholder="Password" name="password_confirmation">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-success btn-lg btn-block mb-3" value="Simpan Password!"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
