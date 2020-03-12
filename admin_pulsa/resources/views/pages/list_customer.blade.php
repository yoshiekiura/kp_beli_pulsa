@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Daftar Pelanggan")
@section('header',"Daftar Pelanggan")
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
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Tanggal Mendaftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $c)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{$c->nama}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->jenis_kelamin}}</td>
                                <td>{{$c->alamat}}</td>
                                <td>{{$c->no_telpon}}</td>
                                <td>{{$c->tanggal_mendaftar}}</td>
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
