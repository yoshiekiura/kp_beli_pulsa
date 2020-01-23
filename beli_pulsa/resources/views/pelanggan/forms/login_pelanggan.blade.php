@extends('layout/main')
@section('title','Masuk Akun Pelanggan')

@section('body')
    <h1 class="card-text" style="margin-bottom: 50px;margin-top: 50px; text-align: center;">Masuk Akun Pelanggan</h1>

        <div style="margin-left: 200px; margin-right: 200px;" >

            @if(Session::has('Kesalahan'))
            <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Kesalahan') !!}</em></div>
            @endif

            @if(Session::has('CobaPaksa'))
                        <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Kesalahan') !!}</em></div>
            @endif

            @if(Session::has('Logout'))
                        <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Logout') !!}</em></div>
            @endif

@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

        <form action="{{ url('/Login') }}" method="POST" style="margin-bottom: 10px;">
                @csrf
                <input type="text"  name="username" value="{{ old('username') }}" placeholder="Username" class="form-control input-lg"  style="margin-bottom: 10px;">
                <input type="password"  name="password" value="{{ old('password') }}" placeholder="Password" class="form-control input-lg"  style="margin-bottom: 10px;">
                <div style="text-align: center; margin-top: 20px;" >
                    <button type="submit" class="btn btn-secondary" id="submit">Masuk</button>
                </div>
            </form>

        </div>





        {{-- <script>
            $(document).ready(function(){
                $('#submit').click(function() {
                    var pass = $('#pass').val();
                    var pass2 = $('#pass2').val();
                    if (pass != pass2) {
                        alert("password tidak sama!");
                    }
                });
            });
        </script> --}}


@endsection
