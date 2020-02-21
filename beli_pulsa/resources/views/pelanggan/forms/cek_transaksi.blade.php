@extends('layout/main')
@section('title','Cek Transaksi')

@section('body')

<div class="container mt">

        <ol class="breadcrumb mb-5 mt-5">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item">Cek Transaksi</li>
        </ol>

        <div class="card">
            <div class="card-header">
              Cek Transaksi
            </div>
            <div class="card-body">
              {{-- <h5 class="card-title">Special title treatment</h5> --}}
              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                <form action="/Cek-transaksip" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="number" name="nomor" class="form-control" placeholder="Masukkan Nomor Telepon" aria-label="Masukkan Nomor Telepon" aria-describedby="button-addon">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon">Cek</button>
                    </div>
                    </div>
            {{-- <div id="result"></div> --}}
                </form>
                @if($data == 'kosong')
                <p>Tidak ada data</p>
                @else

              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal Beli</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Lihat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{$d->tanggal_beli}}</td>
                    <td>{{$d->no_telpon}}</td>
                    <td>@currency($d->harga_total)</td>
                    <td>{{$d->status_transaksi}}</td>
                    <td><a href="" type="button" class="btn btn-primary">Lihat</a></td>
                  </tr>
                  @endforeach
                @endif
                </tbody>

              </table>


            </div>
            <div class="card-footer text-muted">
              SISIRUIT
            </div>
          </div>
</div>




@endsection
