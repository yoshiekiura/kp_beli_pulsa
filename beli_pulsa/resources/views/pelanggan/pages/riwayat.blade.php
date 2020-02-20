@extends('layout/main')
@section('title','Riwayat Saya')

@section('body')

    <h1>RIWAYAT TRANSAKSI</h1>










    @if(!Session::get('nama'))
        @php
            header("Location: " . URL::to('/Login/cobapaksa'));
            exit();
        @endphp
    @endif



@endsection
