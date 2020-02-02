@extends('layout/tampilan_pelanggan')
@section('title','Selamat Datang')

@section('body')
    <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Hai, <b>{{Session::get('nama')}}</b>. Selamat Datang. :)</h3>


    @if(!Session::get('nama'))
        @php
            header("Location: " . URL::to('/Login/cobapaksa'));
            exit();
        @endphp
    @endif


    
@endsection
