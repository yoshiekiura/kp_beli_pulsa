@extends('layout/tampilan_pelanggan')
@section('title','Profil Saya')

@section('body')
    

<table class="table table-striped table-bordered" style="margin-top: 50px;">
  <thead>

    <tr>
    <th colspan="2"><a href="/Pengaturan/{{ $panggil->id }}"><img src="{{ ('../../../images/gear.png') }}" style="float: right;height: 30px;width: 30px;" alt="Pengaturan"></a></th>
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
  </tbody>
</table>
@if(Session::has('Sukses'))
        <div class="alert alert-success" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('Sukses') }}</em></div>
    @endif
    @if(Session::has('Verifed'))
    <div class="alert alert-success" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('Verifed') }}</em></div>
    @endif


    @if(!Session::get('nama'))
        @php
            header("Location: " . URL::to('/Login/cobapaksa'));
            exit();
        @endphp
    @endif



@endsection
