@extends('layout/main')
@section('title','Daftar Pelanggan')

@section('body')

<div class="row justify-content-center">
    <div class="col-lg-5 mb-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">DAFTAR PELANGGAN</h3>

            </div>
            <div class="card-body">
            @if(Session::has('Kesalahan'))
                <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('Kesalahan') }}</em></div>
                @endif
                @if(Session::has('Berhasil'))
                        <div class="alert alert-success" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {{ session::get('Berhasil') }}</em></div>
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
                <form action="{{ url('/Register') }}" method="POST" style="margin-bottom: 10px;">
                    @csrf
                    <input type="text"  name="username" value="{{ old('username') }}" placeholder="Username" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="text"  name="no_telpon" value="{{ old('no_telpon') }}" placeholder="Nomor HP" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="text"  name="email" value="{{ old('email') }}" placeholder="Email" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="password"  name="password" value="" placeholder="Kata Sandi" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass">
                    <input type="password"  name="password_confirmation" value="" placeholder="Konfirmasi Kata Sandi" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass2">
                    <div style="text-align: center; margin-top: 20px;" >
                        <button type="submit" class="btn btn-secondary" id="submit">Mendaftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
