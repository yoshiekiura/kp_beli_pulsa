@extends('layout/tampilan_pelanggan')
@section('title','Profil Saya')

@section('body')

<h1 class="mt-4">Hai, {{$panggil->username}}</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Profil</li>
</ol>

@if(Session::has('Sukses'))
        <div class="alert alert-success" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 25px;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('Sukses') }}</em></div>
    @endif
    @if(Session::has('Verifed'))
    <div class="alert alert-success" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 25px;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('Verifed') }}</em></div>
    @endif
    @if(Session::has('password_salah'))
    <div class="alert alert-danger" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('password_salah') }}</em></div>
@endif
@if ($errors->all())
        <div class="alert alert-danger" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span>
            @foreach ($errors->all() as $message)
            {{ $message }}
            <br>
            @endforeach
        </div>
@endif


    @if(!Session::get('nama'))
        @php
            header("Location: " . URL::to('/Login/cobapaksa'));
            exit();
        @endphp
    @endif

<table class="table table-striped table-bordered animated bounceInLeft delay-1s">
  <thead>

    <tr>
        <th colspan="2">
            <a style="float: right;" href="/Pengaturan/{{ $panggil->id }}"><i style="height: 35px;width: 35px;" class="fas fa-cogs"></i> Edit</a>
        </th>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="col">Nama Lengkap</th>
      <td scope="col">{{ $panggil->nama }}</td>
    </tr>
    <tr>
      <th scope="row">Username</th>
      <td>{{ $panggil->username }}</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td>{{ $panggil->email }}</td>
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td>{{ $panggil->jenis_kelamin }}</td>
    </tr>
    <tr>
      <th scope="row">Alamat</th>
      <td>{{ $panggil->alamat }}</td>
    </tr>
    <tr>
      <th scope="row">No. Telfon</th>
      <td>{{ $panggil->no_telpon }}</td>
    </tr>
    @if ( $panggil->status_akun == "Belum Terverifikasi")
      <tr>
        <th scope="row" style="vertical-align: inherit;">Status Akun</th>
        <td class="text-danger">{{ $panggil->status_akun }}<a style="vertical-align: text-bottom;" href="/SendEmail"><button style="margin-left: 50px;" type="button" class="btn btn-secondary">Kirim Verifikasi Email</button></a></td>
      </tr>
    @elseif ( $panggil->status_akun == "Terverifikasi")
      <tr>
        <th scope="row" style="vertical-align: inherit;">Status Akun</th>
        <td class="text-primary">{{ $panggil->status_akun }}</td>
      </tr>
    @endif
    <tr>
      <th scope="row">Saldo</th>
      <td>@currency(0)</td>
    </tr>
    <tr>
      <th scope="row">Total Transaksi</th>
      <td>@currency(0)</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Mendaftar</th>
      <td>{{ $panggil->created_at }}</td>
    </tr>
    <tr>
        <th colspan="2">
            <a href="#" style="float: right;" data-toggle="modal" data-target="#hapusAkun"><i class="fas fa-trash-alt" style="height: 25px;width: 25px; margin-left:30px"></i><p>Hapus Akun</p></a>
        </th>
    </tr>
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="hapusAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Akun ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/Pengaturan/hapus/'.$panggil->id) }}" method="post">
            @method('delete')
            @csrf
                <div class="form-group">
                    <label for="hapus">Jika anda yakin menghapus akun anda, Masukkan password pada isian dibawah !</label>
                    <input id="hapus" type="password" placeholder="Masukkan Password Anda" name="password" class="form-control input-sm mt-4">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
