@extends('layout/main')
@section('title','Masuk Akun Pelanggan')

@section('body')

<div class="container">
<div class="row justify-content-center">
    <div class="col-lg-5 mb-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-3">Ubah kata sandi anda<br></h3>
                <h5 class="text-center font-weight-light my-2">{{$email}}</h4>

            </div>
            <div class="card-body">
                @if(Session::has('Sukses'))
                        <div class="alert alert-success" style="text-align: center;margin-top:10px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Sukses') !!}</em></div>
                        @endif
                @if(Session::has('Kesalahan'))
                        <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Kesalahan') !!}</em></div>
                        @endif

                        @if(Session::has('CobaPaksa'))
                                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('CobaPaksa') !!}</em></div>
                        @endif

                        @if(Session::has('Logout'))
                                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Logout') !!}</em></div>
                        @endif

                        @if (count($errors) > 0)
                        <div class="alert alert-danger" style="padding-bottom: 0px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    <form action="{{ url('/proses_lupa_password') }}" method="POST" style="margin-bottom: 10px;">
                        @csrf
                        <input type="password"  name="password" value="" placeholder="Masukkan kata sandi baru" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass">
                        <input type="password"  name="password_confirmation" value="" placeholder="Ulangi kata sandi baru" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass2">
                        <div style="text-align: center; margin-top: 20px;" >
                            <button type="submit" class="btn btn-secondary" id="submit">Ubah Password</button>
                        </div>
                    </form>
            </div>

        </div>
    </div>
</div>

</div>
@endsection
