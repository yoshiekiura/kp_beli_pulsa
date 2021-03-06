@extends('layouts.after_login')
@section('title',"TUKUPULSA.COM | Profil")
@section('header',"Profil")
@section('content')

@if (Session::has('gagal'))

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Selamat!</h5>
    {!! session('alert') !!}
</div>
@endif

<div class="row">
    <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile mt-3">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="/assets/lte/dist/img/user.jpg"
                        alt="User profile picture">
                </div>
                <h3 class="profile-username text-center mb-5">{{$profil[0]->nama}}</h3>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{Auth()->user()->email}}</a>
                    </li>
                    <li class="list-group-item">
                    <b>Nomor Telepon</b> <a class="float-right">{{Auth()->user()->no_telpon}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3>
            </div>
            <div class="card-body">
                <strong><i class="fas fa-venus-mars"></i> Jenis Kelamin</strong>
                <p class="text-muted">
                {{ $profil[0]->jenis_kelamin }}
                </p>
            <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                <p class="text-muted">{{ $profil[0]->alamat }}</p>
            <hr>
                <strong><i class="fas fa-shopping-basket"></i> Total Transaksi</strong>
                <p class="text-muted">@currency($total)</p>
            <hr>
                <strong><i class="fas fa-calendar-alt"></i> Tanggal Mendaftar</strong>
                <p class="text-muted">{{$profil[0]->tanggal_mendaftar}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
