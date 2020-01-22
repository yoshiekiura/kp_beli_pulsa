
@extends('layout/tampilan_pelanggan')
@section('title','Masuk Akun Pelanggan')

@section('body')

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

<form action="{{ url('/Pengaturan/Update/'.$ids->id) }}" method="post">
@csrf
@method('PUT')


<table class="table table-striped" style="margin-top: 50px;">
    <tbody>
    <tr>
        <th scope="col">Nama Lengkap</th>
        <td scope="col"><input type="text" name="nama" class="form-control input-lg" value="{{ $ids->nama }}"></td>
    </tr>

    <tr>
        <th scope="row">Username</th>
        <td><input type="text" name="username" class="form-control input-lg" value="{{ $ids->username }}"></td>
    </tr>

    <tr>
        <th scope="row">Email</th>
        <td><input type="email" name="email" class="form-control input-lg" value="{{ $ids->email }}"></td>
    </tr>

    <tr>
        <th scope="row">Jenis Kelamin</th>
        <td>
            <select class="form-control input-lg" name="jenis_kelamin">
            <option value="Laki-Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
        </td>
    </tr>

    <tr>
        <th scope="row">Alamat</th>
        <td><input type="text" name="alamat" class="form-control input-lg" placeholder="Masukkan Alamat Anda" value="{{ $ids->alamat }}"></td>
    </tr>

    <tr>
        <th scope="row">No. Telfon</th>
        <td><input type="text" name="nomor_telpon" class="form-control input-lg" style="float:right" value="{{ $ids->no_telpon }}"></td>
    </tr>

    <tr>
        <th scope="row">Kata Sandi</th>
        <td><input type="password" class="form-control input-lg" name="password"></td>
    </tr>

    <tr>
        <td></td>
        <td><input class="btn btn-primary" value="Edit" type="submit"></td>
    </tr>
    </tbody>
  </table>
</form>



  @endsection
