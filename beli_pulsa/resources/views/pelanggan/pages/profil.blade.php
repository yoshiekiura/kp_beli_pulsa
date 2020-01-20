@extends('layout/tampilan_pelanggan')
@section('title','Profil Saya')

@section('body')

<table class="table table-striped" style="margin-top: 50px;">
  <thead>
<<<<<<< HEAD
      <tr>
          <th></th>
      <th><a href="/Pengaturan/{{ $panggil->id }}"><img src="{{ ('../../../images/gear.png') }}" style="float: right;height: 30px;width: 30px;" alt="Pengaturan"></a></th>
    </tr>
=======
>>>>>>> b0d4b70d15bc113983aea8fc9ff93542a71e0ce1
  </thead>
  <tbody>
    <tr>
      <th scope="col">Nama Lengkap</th>
      <td scope="col">{{ $panggil->nama }}</td>
    </tr>
    <tr>
      <th scope="row">Username</th>
      <td>{{ $panggil->nama }}</td>
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
    <tr>
      <th scope="row">Status Akun</th>
      <td>{{ $panggil->status_akun }}</td>
    </tr>
    <tr>
      <th scope="row">Saldo</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Total Transaksi</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Tanggal Mendaftar</th>
      <td>{{ $panggil->created_at }}</td>
    </tr>
  </tbody>
</table>




        






    @if(!Session::get('nama'))
        @php
            Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
            header("Location: " . URL::to('/Login/create'), true, 302);
            exit();
        @endphp
    {{-- <script type="text/javascript">
        window.location.href = "{{url('/Login/create')}}";//here double curly bracket
    </script> --}}
    @endif



@endsection
