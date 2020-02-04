@extends('layout.admin')
@section('title','Admin TUKUPULSA')

@section('body')

    @if(!Session::get('admin'))
        @php
            Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
            header("Location: " . URL::to('Login/Admin'), true, 302);
            exit();
        @endphp
    @endif

    <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Hai, <b>{{Session::get('admin')}}</b>. Selamat Datang. :)</h3>


@endsection
