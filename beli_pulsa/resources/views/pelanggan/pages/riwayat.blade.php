@extends('layout/tampilan_pelanggan')
@section('title','Riwayat Saya')

@section('body')

    <h1>RIWAYAT TRANSAKSI</h1>

        

        






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
