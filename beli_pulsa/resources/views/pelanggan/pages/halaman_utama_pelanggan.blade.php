@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')
<div class="card text-center" style="margin-top: 100px">
    <div class="card-body">
        <h1 class="card-text" style="margin-bottom: 150px;margin-top: 150px">Halaman UTAMA</h3>
    </div>
</div>



    @if(Session::has('Logout'))
        <div class="alert alert-danger" style="text-align: center; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Logout') !!}</em></div>
    @endif
<br><br><br>
<div id="produk">
    <div class="row mt-5">
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
        </div>
        <div class="col-9">
        <form action="{{ url('Produk/Cek')}}" method="get">
                <input type="text" name="cari" placeholder="Cari Provider" value="{{ old('cari') }}">
                <input type="submit" value="CARI">
        </form>

            <table class="table mt-3">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Provider</th>
                    <th scope="col">Detail Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($price as $harga)
                  <tr>
                    <th scope="row">{{ $harga->provider }}</th>
                    <td>{{ $harga->detail_produk }}</td>
                    <td>{{ $harga->keterangan }}</td>
                    <td>@currency($harga->harga)</td>
                    <td>Tersedia</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              {{ $price->links() }}
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
@endsection


