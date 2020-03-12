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
                    <h1 class="mt-4">Daftar Transaksi Tuku Pulsa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Transaksi</li>
                        </ol>
                        
                    <div class="table-responsive">
                      <form action="/mobilepulsa/pulsa" method="POST">
                      @csrf
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">No.</th>
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
                              @foreach ($hasil as $item)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>Paket {{ $item->pulsa_type}}</td>
                              <input type="hidden" name="pulsa_code" value="{{ $item->pulsa_code}}">
                              <td>{{ $item->pulsa_op}}</td>
                              <td>{{ $item->pulsa_nominal}}</td>
                              <input type="hidden" name="no_telpon" value="{{ $item->no_telpon}}">
                              <td>{{ $item->no_telpon}}</td>
                              <td>{{ $item->bank}} ( {{ $item->atas_nama}} )</td>
                              <td>{{ $item->tanggal_beli}}</td>
                              @if($item->status_transaksi == 0)
                              <td>Menunggu</td>
                              <td><input type="submit" value="Bayar"></td>
                              
                              @elseif($item->status_transaksi == 1)
                              <td>Proses</td>
                              <td></td>
                              
                              @elseif($item->status_transaksi == 2)
                              <td>Selesai</td>
                              <td></td>
                              @endif
                          </tr>
                            @endforeach
                          </tbody>
                          </form>
                        </table>

                    </div>
                    </div>
                </main>

    
    

@endsection
