
@extends('layout/main')
@section('title','Edit Profil Akun Pelanggan')

@section('body')
<div class="container tambah_bawah">
<h1 class="mt-4">Hai, {{$ids->username}}</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/Profil">Profil</a></li>
    <li class="breadcrumb-item">Edit Profil</li>
</ol>

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

<form action="{{ url('/Pengaturan/Update/'.$ids->id_user) }}" method="post">
@csrf
@method('PUT')

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active text-dark" href="#">Edit Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="{{ url('/Pengaturan/Pwd/'.$ids->id_user) }}">Edit Password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="{{ url('/Pengaturan/Pin/'.$ids->id_user) }}">Edit Pin</a>
    </li>
  </ul>

  <div class="container">
      <div class="row">
          <div class="col">
            <div class="card mt-5 mb-5">
                <div class="card-header">
                  Profil
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" class="form-control" id="nama" value="{{ $ids->nama }}" placeholder="Masukkan Nama">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control input-lg" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $ids->alamat }}" placeholder="Masukkan Alamat">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pwd" class="col-sm-2 col-form-label">Kata Sandi</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="pwd" placeholder="Masukkan Password">
                        </div>
                      </div>
                </div>
                <div class="card-footer text-muted text-center">
                    <input class="btn btn-primary" value="Simpan" type="submit">
                </div>
              </div>
          </div>
      </div>
  </div>
{{-- <table class="table table-striped table-bordered animated heartBeat delay-1s" style="margin-top: 50px;">
    <thead>
        <tr>
            <th colspan="2">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <a href="#" class="btn btn-secondary active">Edit Profile</a>
                      <a href="{{ url('/Pengaturan/Pwd/'.$ids->id_user) }}" class="btn btn-secondary">Edit Password</a>
                      <a href="{{ url('/Pengaturan/Pin/'.$ids->id_user) }}" class="btn btn-secondary">Edit Pin</a>
                </div>

            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col">Nama Lengkap</th>
        <td scope="col"><input type="text" name="nama" class="form-control input-lg" value="{{ $ids->nama }}" placeholder="Masukkan nama anda"></td>
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
        <th scope="row">Kata Sandi</th>
        <td><input type="password" class="form-control input-lg" name="password"></td>
    </tr>

    <tr>
        <td></td>
        <td><input class="btn btn-primary" value="Simpan" type="submit"></td>
    </tr>
    </tbody>
  </table> --}}
</form>

</div>
  @endsection
