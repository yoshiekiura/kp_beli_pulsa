@extends('layout/main')
@section('title','Selamat Datang')

@section('body')
    <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Hai, <b>{{Session::get('nama')}}</b>. Selamat Datang. :)</h3>
    <a href="/Logout" class="btn btn-danger" style="float:right">LOGOUT !</a>
@endsection
