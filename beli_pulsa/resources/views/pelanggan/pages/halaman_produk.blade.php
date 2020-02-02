@extends('layout.tampilan_pelanggan')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')



<div class="row mt-5">
    <div class="col-3 mt-1">
        <div id="accordion">
            <div class="card" style="margin-top: 4px;">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="margin-left: -10px;">
                    Pulsa Reguler
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="list-group">
                    <a class="list-group-item" href="/Harga/pulsa/axisxl" style="text-decoration: none;">Axis & XL</a>
                    <a class="list-group-item" href="/Harga/pulsa/indosat" style="text-decoration: none;">Indosat</a>
                    <a class="list-group-item" href="/Harga/pulsa/smartfren" style="text-decoration: none;">Smartfren</a>
                    <a class="list-group-item" href="/Harga/pulsa/telkomsel" style="text-decoration: none;">Telkomsel</a>
                    <a class="list-group-item" href="/Harga/pulsa/tri" style="text-decoration: none;">Tri</a>
                  </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="margin-left: -10px;">
                    Paket Internet
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" role="tabpanel">
                <div class="list-group">
                  <a class="list-group-item" href="#" style="text-decoration: none;">Axis (Bronet)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Axis (Keren Zmua)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Axis (Owsem)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Indosat</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Indosat (unlimit)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Indosat (New Freedom 30Hr)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Indosat (Yellow)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Indosat (Lainnya)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Indosat (Freedom)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Mini)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (369)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Zona 1-11)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (As)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Loop)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Simpati)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Add)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Bulan)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Combo)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Hari)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Zona 1-8)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Zona 1-10)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Bulk Tsel Semua Zona)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Depok)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Data Malam 00-07)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Telkomsel (Fix)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Smartfren</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri KPK(Kartu Perdana Kosong)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Mini)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Aon)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Cinta)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Anynet)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Getmore)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Khusus)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">Three/Tri (Extra Kuota)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">XL (Combo)</a>
                  <a class="list-group-item" href="#" style="text-decoration: none;">XL (Hotrod)</a>

                </div>
              </div>
            </div>
            <div class="text-center">
              <span class="badge badge-info mt-3 center-block">
              Jumlah Data : {{ $arr['price']->total() }}
              </span>
          </div>
          </div>


    </div>
    <div class="col-9">
    

    <div class="table-responsive">
        <table class="table table-sm mt-2">
            <thead class="thead-dark">
            <tr>{{$judul}}</tr>
              <tr>
                <th scope="col" class="">Detail Produk</th>
                <th scope="col" class="">Kode</th>
                <th scope="col" class="">Provider</th>
                <th scope="col" class="">Keterangan</th>
                <th scope="col" class="">Harga</th>
                <th scope="col" class="">Stok</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($arr['price'] as $harga)
                @if ($harga->status == "Ada")
                    <tr class="table-success">
                        <th scope="row">{{ $harga->detail_produk }}</th>
                        <td>{{ $harga->kode }}</td>
                        <td>{{ $harga->provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                    @elseif ($harga->status == "Kosong")
                    <tr class="table-danger">
                        <th scope="row">{{ $harga->detail_produk }}</th>
                        <td>{{ $harga->kode }}</td>
                        <td>{{ $harga->provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="mt-2">
          {{ $arr['price']->links() }}
        </div>

    </div>
</div>



@endsection
