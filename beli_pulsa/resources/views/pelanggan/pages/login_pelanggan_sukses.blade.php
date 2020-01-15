@extends('layout/tampilan_pelanggan')
@section('title','Selamat Datang')

@section('body')
    <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Hai, <b>{{Session::get('nama')}}</b>. Selamat Datang. :)</h3>


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
