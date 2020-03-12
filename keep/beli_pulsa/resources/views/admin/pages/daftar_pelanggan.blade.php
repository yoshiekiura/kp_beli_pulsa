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
                    <h1 class="mt-4">Daftar Pelanggan Tuku Pulsa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Pelanggan</li>
                        </ol>
                        
                    <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Username</th>
                              <th scope="col">Email</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Nomor Telepon</th>
                              <th scope="col">Tanggal Mendaftar</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($user as $item)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{ $item->nama}}</td>
                              <td>{{ $item->username}}</td>
                              <td>{{ $item->email}}</td>
                              <td>{{ $item->jenis_kelamin}}</td>
                              <td>{{ $item->alamat}}</td>
                              <td>{{ $item->no_telpon}}</td>
                              <td>{{ $item->created_at}}</td>
                          </tr>
                            @endforeach
                          </tbody>
                        </table>

                    </div>
                    </div>
                </main>

    
    

@endsection
