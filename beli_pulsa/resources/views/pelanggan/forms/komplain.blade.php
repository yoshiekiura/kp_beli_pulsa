@extends('layout/main')
@section('title','Komplain')

@section('body')
<div class="container tambah_bawah">
<h1 class="mt-4">Beri Komplain</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item">Komplain</li>
    </ol>
    <form action="Komplain/Kirim" method="POST">
        @csrf
        <div class="form-group">
          <label for="komplain">Komplain</label>
          <input type="text" class="form-control" name="id_transaksi" id="komplain" value="666" readonly>
        </div>
        <div class="form-group">
          <label for="Nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="Nama">
        </div>
        <div class="form-group">
          <label for="tlp">No. Telepon</label>
          <input type="number" class="form-control" name="telp" id="tlp" aria-describedby="tlp">
          <small id="tlp" class="form-text text-muted">Masukan nomor HP sesuai yang ada di data transaksi yang anda komplain</small>
        </div>

        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea type="text" class="form-control" name="pesan" id="pesan">{{$pesan}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Kirim</button>
      </form>

    </div>
@endsection
