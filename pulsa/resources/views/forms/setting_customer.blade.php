@extends('layouts.after_login')

@section('title',"TUKUPULSA.COM | Pengaturan Akun")
@section('header',"Pengaturan Akun")
@section('content')


<div class="card card-default card-primary card-outline">
    <div class="card-header">
        <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Edit Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pwd-tab" data-toggle="pill" href="#pills-pwd" role="tab" aria-controls="pills-pwd" aria-selected="false">Edit Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pin-tab" data-toggle="pill" href="#pills-pin" role="tab" aria-controls="pills-pin" aria-selected="false">Edit Pin</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h5>
                    @if(Session::has('gagal'))
                    <p class="login-box-msg mb-3">{!! session('gagal') !!}</p>
                    @endif
                    @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <p class="login-box-msg mb-3">{{ $error }}</p>
                            @endforeach

                    @endif
                </h5>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="/putEditProfil" method="post">
                            @method('PUT')
                            @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{$customer[0]->nama}}" id="nama" placeholder="Nama Lengkap" minlength="3" required>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg" name="jenis_kelamin">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name=alamat class="form-control" value="{{$customer[0]->alamat}}" id="alamat" placeholder="Alamat">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Masukkan Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-warning float-right">Simpan</button>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="pills-pwd" role="tabpanel" aria-labelledby="pwd-tab">
                        <form action="/putEditPassword" method="post">
                            @method('PUT')
                            @csrf
                        <div class="form-group row">
                            <label for="passwordlama" class="col-sm-2 col-form-label">Password Sekarang</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_lama" id="passwordlama" placeholder="Password Sekarang" minlength="8" required>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="new_password" class="col-sm-2 col-form-label">Password Baru</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_baru" id="new_password" placeholder="Password Baru" minlength="8" required>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="konfirmasi_password" class="col-sm-2 col-form-label">Konfirmasi Password Baru</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_cek" id="konfirmasi_password" placeholder="Konfirmasi Password Baru" minlength="8" required>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-warning float-right">Simpan</button>
                    </form>
                    </div>


                    <div class="tab-pane fade" id="pills-pin" role="tabpanel" aria-labelledby="pin-tab">
                        <-- Maintenance -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="card card-default collapsed-card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Hapus Akun</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
        </div>
    </div>
    <div class="card-body text-center">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    <i class="fas fa-trash"></i> Hapus Akun
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yakin Hapus Akun ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{ url('/Pengaturan/hapus/'.Auth()->user()->id) }}" method="post">
                        @method('delete')
                        @csrf
                    <div class="form-group">
                        <label for="hapus">Jika anda yakin menghapus akun anda, Masukkan password pada isian dibawah !</label>
                        <input id="hapus" type="password" placeholder="Masukkan Password Anda" name="password" class="form-control input-sm mt-4">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-warning">Hapus Sekarang</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $(".submit").click(function(){
            var data = $('.form-user').serialize();
            $.ajax({
                type:'POST',
                url: "/postEditPassword",
                data: data,
                success: function(){
                    $('.tampildata').html(result);
                }
            });
        });
    });
</script>
@endsection
