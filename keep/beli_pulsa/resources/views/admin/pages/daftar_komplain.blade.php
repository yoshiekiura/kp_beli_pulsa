@extends('layout.admin')
@section('title','Admin TUKUPULSA')

@section('body')

    @if(!Session::get('admin'))
        @php
            Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
            header("Location: " . URL::to('Login/Admin'), true, 302);
            exit();
        @endphp
    @endif

    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h1 class="mt-4">Daftar Komplain Tuku Pulsa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Komplain</li>
                        </ol>
                        
                    <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Id Transaksi</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Nomor Telepon</th>
                              <th scope="col">Pesan</th>
                              <th scope="col">Tanggal Komplain</th>
                              <th scope="col">Sudah Dilakukan</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($user as $item)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{ $item->id_transaksi}}</td>
                              <td>{{ $item->nama}}</td>
                              <td>{{ $item->no_telpon}}</td>
                              <td>{{ $item->pesan}}</td>
                              <td>{{ $item->created_at}}</td>
                              <td class="text-center"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                          </tr>
                            @endforeach
                          </tbody>
                        </table>

                    </div>
                    </div>
                </main>

    
    

@endsection
