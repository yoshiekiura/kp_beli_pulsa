@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Daftar Bank")
@section('header',"Daftar Bank")
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
                                <th scope="col">Bank</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor Rekening</th>
                                <th scope="col">Atas Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bank as $k)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{$k->bank}}</td>
                                <td>{{$k->nama}}</td>
                                <td>{{$k->no_rekening}}</td>
                                <td>{{$k->atas_nama}}</td>
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
