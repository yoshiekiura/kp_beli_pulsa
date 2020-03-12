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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{$d->pulsa_type}}</td>
                                <td>{{$d->pulsa_op}}</td>
                                <td>{{$d->pulsa_nominal}}</td>
                                <td>{{$d->no_telpon}}</td>
                                <td>{{$d->bank}}</td>
                                <td>{{$d->tanggal_beli}}</td>
                                @if($d->status_pembayaran == 0)
                                <td>Belum Bayar.</td>
                                @elseif($d->status_pembayaran == 1)
                                <td>Pending.</td>
                                @elseif($d->status_pembayaran == 2)
                                <td>Selesai.</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
