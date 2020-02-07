@extends('layout/main')
@section('title','Masuk Akun Pelanggan')

@section('body')


<div class="row justify-content-center">
    <div class="col-lg-5 mb-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Masuk Akun Pelanggan</h3>
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
                <form action="{{ url('/Login') }}" method="POST" style="margin-bottom: 10px;">
                    @csrf
                    <input type="text"  name="username" value="{{ old('username') }}" placeholder="Username" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="password"  name="password" value="{{ old('password') }}" placeholder="Password" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <div style="text-align: center; margin-top: 20px;" >
                        <button type="submit" class="btn btn-secondary" id="submit">Masuk</button>
                    </div>
                </form>
                <th colspan="2">
                    <a href="#" style="float: right;" data-toggle="modal" data-target="#lupaPassword"><i class="far fa-question-circle" 
                    style="height: auto; width: 30px; margin-left:40px"></i><p>Lupa Password ?</p></a>
                </th>
                   
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lupaPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lupa password akun anda ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/Lupa_password') }}" method="post">
            @method('post')
            @csrf
                <div class="form-group">
                    <label for="hapus">Silakan masukkan email pada isian dibawah !</label>
                    <input id="hapus" type="text" placeholder="Masukkan Email Anda" name="email" class="form-control input-sm mt-4">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection
