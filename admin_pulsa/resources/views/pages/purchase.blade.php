@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Transaksi Pembelian")
@section('header',"Transaksi Pembelian")
@section('content')

<div class="card card-default card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                                <tr>
                                <th scope="col" style="width: 40px">No.</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Provider</th>
                                <th scope="col">Voucher</th>
                                <th scope="col">No. Telepon</th>
                                <th scope="col">Pembayaran</th>
                                <th scope="col">Tanggal Pembelian</th>
                                <th scope="col">Status Pembayaran</th>
                                <th scope="col">Aksi</th>
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
                                <td>#</td>
                                <td>#</td>
                                <td><button class="badge badge-primary">Beli</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
