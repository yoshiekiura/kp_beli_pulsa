@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Komplain")
@section('header',"Komplain")
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
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Tanggal Komplain</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($komplain as $k)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{$k->id_transaksi}}</td>
                                <td>{{$k->nama}}</td>
                                <td>{{$k->no_telpon}}</td>
                                <td>{{$k->pesan}}</td>
                                <td>{{$k->waktu_komplain}}</td>
                                <td><a href="/aksiComplain/?id={{$k->id}}" class="badge badge-success">Sudah Dilakukan ?</a></td>
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
