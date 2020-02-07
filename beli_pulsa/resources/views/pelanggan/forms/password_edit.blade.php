
@extends('layout/tampilan_pelanggan')
@section('title','Edit Password Akun Pelanggan')

@section('body')

<h1 class="mt-4">Hai, {{$ids->username}}</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/Profil">Profil</a></li>
    <li class="breadcrumb-item">Edit Password</li>
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

<form action="{{ url('/Pengaturan/Update/Pwd/'.$ids->id) }}" method="post">
@csrf
@method('PUT')


<table class="table table-striped table-bordered" style="margin-top: 50px;">
    <thead>
        <tr>
            <th colspan="2">

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <a href="/Pengaturan/{{ $ids->id }}" class="btn btn-secondary">Edit Profile</a>
                      <a href="#" class="btn btn-secondary active">Edit Password</a>
                      <a href="{{ url('/Pengaturan/Pin/'.$ids->id) }}" class="btn btn-secondary">Edit Pin</a>
                </div>

            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col">Password saat ini</th>
        <td scope="col"><input type="password" name="pwd" class="form-control input-lg"></td>
    </tr>

    <tr>
        <th scope="row">Password baru</th>
        <td><input type="password" name="pwd_baru" class="form-control input-lg"></td>
    </tr>

    <tr>
        <th scope="row">Masukkan kembali password baru</th>
        <td><input type="password" name="pwd_cek" class="form-control input-lg"></td>
    </tr>

    <tr>
        <td></td>
        <td><input class="btn btn-primary" value="Simpan" type="submit"></td>
    </tr>
    </tbody>
  </table>
</form>

  @endsection
