@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')
<div class="card text-center" style="margin-top: 100px">
    <div class="card-body">
        <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Hai, <b>{{Session::get('nama')}}</b>. Selamat Bekerja:)</h3>
    </div>
</div>
@endsection
