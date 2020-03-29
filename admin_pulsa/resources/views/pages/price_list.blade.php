@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Daftar Harga")
@section('header',"Daftar Harga")
@section('content')

<div class="card card-default card-primary card-outline">
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

@endsection
