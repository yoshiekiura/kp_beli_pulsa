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
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td><button class="badge badge-primary">Lihat</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection
