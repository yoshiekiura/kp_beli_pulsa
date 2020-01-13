@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')
<div class="card text-center" style="margin-top: 100px">
    <div class="card-body">
        <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Halaman UTAMA</h3>
    </div>
</div>

    

    @if(Session::has('Logout'))
        <div class="alert alert-danger" style="text-align: center; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Logout') !!}</em></div>
    @endif
@endsection
