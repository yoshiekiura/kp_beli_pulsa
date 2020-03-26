@extends('layouts.form_customer')


@section('title',"TUKUPULSA.COM | Komplain")
@section('header',"Komplain")

@section('content')

<section class="about-area ptb-90">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="sec-title">
                <h2><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                <p>Beri komplain untuk pemesanan anda</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="single-about-box text-left">
                    @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <p class="login-box-msg mb-3 text-danger">{{ $error }}</p>
                            @endforeach
                    @endif
                <form action="Komplain/Kirim" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="komplain">Komplain</label>
                      <input type="text" class="form-control" name="id" id="komplain" value="{{ $kode }}" required readonly>
                      <small id="komplain" class="form-text text-muted">Jangan hiraukan kode diatas</small>
                    </div>
                    <div class="form-group">
                      <label for="Nama">Nama</label>
                      <input type="text" class="form-control" name="nama" minlength="5" id="Nama" required>
                    </div>
                    <div class="form-group">
                      <label for="tlp">No. Telepon</label>
                        <input type="number" class="form-control" name="no_telpon" value="{{$no_telpon->no_telpon}}" id="tlp" aria-describedby="tlp" min="0" maxlength="13" required readonly>
                      <small id="tlp" class="form-text text-muted">Masukan nomor HP sesuai yang ada di data transaksi yang anda komplain</small>
                    </div>

                    <div class="form-group">
                      <label for="pesan">Pesan</label>
                      <textarea type="text" class="form-control" name="pesan" id="pesan" required>{{$pesan}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-5">Kirim</button>
                  </form>

            </div>
        </div>

    </div>
</div>
</section>

@endsection
