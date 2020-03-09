@extends('layouts.after_login')
    @section('title',"TUKUPULSA.COM | Beli Sekarang")
    @section('header',"Beli Sekarang")
    @section('content')


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
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
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
                                    <tr>
                                        <th scope="row">+</th>
                                        <td>+</td>
                                        <td>+</td>
                                        <td>+</td>
                                        <td>+</td>
                                        <td>+</td>
                                    </tr>
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
                                    <tr>
                                        <th scope="row">@</th>
                                        <td>@</td>
                                        <td>@</td>
                                        <td>@</td>
                                        <td>@</td>
                                        <td>@</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-default card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Pilih paket yang akan dibeli</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pilih Type Paket</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Type Paket --</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Nama Produk</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Nama Produk --</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pilih Operator</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Operator --</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Pembayaran</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">-- Pilih Pembayaran --</option>
                                <option>BCA</option>
                                <option>Saldo Deposit</option>
                                <option disabled="disabled">California (disabled)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="masaaktif">Masa Aktif</label>
                    <input type="text" class="form-control" id="masaaktif" placeholder="Masa Aktif" disabled>
                </div>
                <div class="form-group">
                    <label for="nohp">No. Telepon</label>
                    <input type="number" class="form-control" id="nohp" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Harga Paket" readonly>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
        <div class="card-footer text-center">
            <a href="/rincian-transaksi-pelanggan"><button type="submit" class="btn btn-warning">Proses</button></a>
        </div>
</div>

@endsection
