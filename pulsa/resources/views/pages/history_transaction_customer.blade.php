@extends('layouts.after_login')
@section('tittle',"TUKUPULSA.COM | Riwayat Transaksi")
@section('header',"Riwayat Transaksi")
@section('content')

<div class="card card-default card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Transaksi anda selama sebulan terakhir</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 10px">No.</th>
                                        <th scope="col" style="width: 150px">Tanggal Beli</th>
                                        <th scope="col" style="width: 350px">No. Telepon</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 90px">Status</th>
                                        <th scope="col" style="width: 70px">Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <th scope="row">{{$loop->iteration }}</th>
                                        <td>{{$d->tanggal_beli}}</td>
                                        <td>{{$d->no_telpon}}</td>
                                        <td>@currency($d->harga_total)</td>
                                        @if($d->status_pembayaran == 0)
                                        <td>Belum Bayar.</td>
                                        @elseif($d->status_pembayaran == 1)
                                        <td>Pending.</td>
                                        @elseif($d->status_pembayaran == 2)
                                        <td>Selesai.</td>
                                        @endif
                                        <td><a href="/rincian_transaction_customer/{{base64_encode($d->id)}}"><button class="badge badge-primary">Lihat</button></a></td>
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
