@extends('layouts.after_login')
    @section('title',"TUKUPULSA.COM | Beli Sekarang")
    @section('header',"Beli Sekarang")
    @section('content')

    @if (Session::has('login'))

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Selamat Bergabung! <b>{{ Auth()->user()->nama}}</b></h5>
        {!! session('alert') !!}
    </div>
    @endif

<div class="card card-default collapsed-card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Daftar Harga</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="semua-tab" data-toggle="pill" href="#pills-semua" role="tab" aria-controls="pills-semua" aria-selected="true">Lihat Semua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pulsa-tab" data-toggle="pill" href="#pills-pulsa" role="tab" aria-controls="pills-pulsa" aria-selected="false">Pulsa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="data-tab" data-toggle="pill" href="#pills-data" role="tab" aria-controls="pills-data" aria-selected="false">Data</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pills-semua" role="tabpanel" aria-labelledby="semua-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 100px">Type Produk</th>
                                        <th scope="col" style="width: 150px">Operator</th>
                                        <th scope="col" style="width: 350px">Nama Produk</th>
                                        <th scope="col" style="width: 90px">Masa Aktif</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 70px">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semua as $s)
                                    <tr>
                                        <th scope="row">Paket {{$s->pulsa_type}}</th>
                                        <td>{{$s->pulsa_op}}</td>
                                        <td>{{$s->pulsa_nominal}}</td>
                                        <td>{{$s->masaaktif}} Hari</td>
                                        <td>@currency($s->pulsa_price)</td>
                                        <td>{{$s->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pulsa" role="tabpanel" aria-labelledby="pulsa-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="example2">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 100px">Type Produk</th>
                                        <th scope="col" style="width: 150px">Operator</th>
                                        <th scope="col" style="width: 350px">Nama Produk</th>
                                        <th scope="col" style="width: 90px">Masa Aktif</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 70px">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pulsa as $p)
                                    <tr>
                                        <th scope="row">Paket {{$p->pulsa_type}}</th>
                                        <td>{{$p->pulsa_op}}</td>
                                        <td>{{$p->pulsa_nominal}}</td>
                                        <td>{{$p->masaaktif}} Hari</td>
                                        <td>{{$p->pulsa_price}}</td>
                                        <td>{{$p->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-data" role="tabpanel" aria-labelledby="data-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="example3">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 100px">Type Produk</th>
                                        <th scope="col" style="width: 150px">Operator</th>
                                        <th scope="col" style="width: 350px">Nama Produk</th>
                                        <th scope="col" style="width: 90px">Masa Aktif</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 70px">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <th scope="row">Paket {{$d->pulsa_type}}</th>
                                        <td>{{$d->pulsa_op}}</td>
                                        <td>{{$d->pulsa_nominal}}</td>
                                        <td>{{$d->masaaktif}} Hari</td>
                                        <td>{{$d->pulsa_price}}</td>
                                        <td>{{$d->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card card-default card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Paket Pulsa</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <p class="login-box-msg mb-3">{{ $error }}</p>
                            @endforeach
                        @endif
                        <form action="/postBeliCustomer" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Pilih Operator</label>
                                <select class="form-control dynamic1" name="pulsa_op" id="pulsa_op" data-dependent="pulsa_nominal" style="width: 100%;" required>
                                    <option selected disabled value="">-- Pilih Operator --</option>
                                    @foreach ($produk_pulsa as $q)
                                        <option value="{{ $q->pulsa_op }}">{{ $q->pulsa_op }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pilih Nama Produk</label>
                                <select class="form-control opsi-pulsa" name="pulsa_nominal" id="keterangan1" style="width: 100%;" required>
                                    <option selected="selected">-- Pilih Nama Produk --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pilih Pembayaran</label>
                                <select class="form-control" name="bank" style="width: 100%;" required>
                                    <option selected disabled>-- Pilih Pembayaran --</option>
                                            @foreach ($bank as $b)
                                            <option value="{{$b->id}}">{{  $b->bank }}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="masaaktif">Masa Aktif</label>
                                <input type="text" class="form-control" id="masaaktif1" placeholder="Masa Aktif" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nohp">No. Telepon</label>
                                <input type="number" name="nomor" class="form-control" placeholder="-- Nomor Telepon --" min="0" maxlength="13" required>
                                {{-- <input type="number" class="form-control" id="nohp" placeholder="Nomor Telepon"> --}}
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control hr1" placeholder="Harga Paket" readonly>
                            </div>
                            <input type="hidden" name="harga" id="hr1" readonly required>
                            <input type="hidden" name="kode"  id="kode1" readonly required>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-warning">Proses</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-6">
        <div class="card card-default card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Paket Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                            <p class="login-box-msg mb-3">{{ $error }}</p>
                            @endforeach
                        @endif
                        <form action="/postBeliCustomer" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Pilih Operator</label>
                                <select class="form-control dynamic2" name="pulsa_op" id="pulsa_op" data-dependent="pulsa_nominal" style="width: 100%;">
                                    <option selected disabled value="">-- Pilih Operator --</option>
                                                @foreach ($produk_data as $q)
                                                    <option value="{{ $q->pulsa_op }}">{{ $q->pulsa_op }}</option>
                                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pilih Nama Produk</label>
                                <select class="form-control opsi-paket" name="pulsa_nominal" id="keterangan2" style="width: 100%;" required>
                                    <option selected="selected">-- Pilih Nama Produk --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pilih Pembayaran</label>
                                <select class="form-control select2" name="bank" style="width: 100%;" required>
                                    <option selected disabled>-- Pilih Pembayaran --</option>
                                    @foreach ($bank as $b)
                                    <option value="{{$b->id}}">{{  $b->bank }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="masaaktif">Masa Aktif</label>
                                <input type="text" class="form-control" id="masaaktif2" placeholder="Masa Aktif" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nohp">No. Telepon</label>
                                <input type="number" name="nomor" class="form-control" placeholder="-- Nomor Telepon --" min="0" maxlength="13" required>
                                {{-- <input type="number" class="form-control" id="nohp" placeholder="Nomor Telepon"> --}}
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control hr2" placeholder="Harga Paket" readonly>
                            </div>
                            <input type="hidden" name="harga" id="hr2" readonly required>
                            <input type="hidden" name="kode"  id="kode2" readonly required>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-warning">Proses</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('.dynamic1').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url("Ajax/cari")}}',
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('.opsi-pulsa').html(result);
                    }
                })
            }
        });

        $('.dynamic2').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url("Ajax/cari")}}',
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('.opsi-paket').html(result);
                    }
                })
            }
        });

        $('#keterangan1').change(function(){
            var provider = $('.dynamic1').val();
            var ket = $(this).val();
            var _token = $('input[name="_token"]').val();
            console.log(ket);

            $.ajax({
                url: '{{ url("Ajax/bawaKodeHarga") }}',
                method: 'POST',
                data:{keterangan:ket, _token:_token},
                dataType: "JSON",
                success:function(data){
                    //console.log(data);

                    $('.hr1').val(data.pulsa_price);
                    $('#hr1').val(data.pulsa_price);
                    $('#masaaktif1').val("+ " +data.masaaktif + " Hari");
                    $('#kode1').val(data.pulsa_code);
                    // $('#produk1').val(data.pulsa_op);
                    // $('#ket1').val(data.pulsa_nominal);
                }
            });
        });

        $('#keterangan2').change(function(){
            var provider = $('.dynamic2').val();
            var ket = $(this).val();
            var _token = $('input[name="_token"]').val();
            //console.log(ket);

            $.ajax({
                url: '{{ url("Ajax/bawaKodeHarga") }}',
                method: 'POST',
                data:{keterangan:ket, _token:_token},
                dataType: "JSON",
                success:function(data){
                    //console.log(data);
                    // console.log($('.hr2').html(data.pulsa_price));
                    $('.hr2').val(data.pulsa_price);
                    $('#hr2').val(data.pulsa_price);
                    $('#kode2').val(data.pulsa_code);
                    $('#masaaktif2').val(data.masaaktif + " Hari");
                    // $('#produk2').val(data.pulsa_op);
                    // $('#ket2').val(data.pulsa_nominal);
                }
            });
        });
    });
</script>

@endsection
