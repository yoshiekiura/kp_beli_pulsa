@extends('layout.tampilan_pelanggan')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')

<h1 class="mt-4">Pilih Paket</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Daftar Harga</li>
</ol>
<div class="row mt-2">

    <div class="col-2 mt-1 animated zoomInDown delay-0s">
        <div id="accordion">
            <div class="card mt-5">
              <div class="card-header bg-dark" id="headingTwo">
                <h5 class="mb-0">


                  <button class="btn btn-link text-white collapsed py-0" data-toggle="collapse" data-target="#paketInternet" aria-expanded="false" aria-controls="paketInternet" style="margin-left: -10px;">
                    Paket Internet
                  </button>
                </h5>
              </div>
              <div id="paketInternet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="list-group">
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/axis_bronet" style="text-decoration: none;">Axis (Bronet)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/axis_keren_zmua" style="text-decoration: none;">Axis (Keren Zmua)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/axis_owsem" style="text-decoration: none;">Axis (Owsem)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/indosat" style="text-decoration: none;">Indosat (Fix)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/indosat_unlimit" style="text-decoration: none;">Indosat (Unlimited)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/indosat_new_freedom_30hr" style="text-decoration: none;">Indosat (New Freedom 30Hr)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/indosat_yellow" style="text-decoration: none;">Indosat (Yellow)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/indosat_mini" style="text-decoration: none;">Indosat (Mini)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/indosat_freedom" style="text-decoration: none;">Indosat (Freedom)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_mini" style="text-decoration: none;">Telkomsel (Mini)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_369" style="text-decoration: none;">Telkomsel (369)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_as" style="text-decoration: none;">Telkomsel (As)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_loop" style="text-decoration: none;">Telkomsel (Loop)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_simpati" style="text-decoration: none;">Telkomsel (Simpati)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_vas" style="text-decoration: none;">Telkomsel (Vas)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_hari" style="text-decoration: none;">Telkomsel (Hari)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_bulan" style="text-decoration: none;">Telkomsel (Bulan)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_combo" style="text-decoration: none;">Telkomsel (Combo)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_bulk_zona_1_8" style="text-decoration: none;">Telkomsel (Bulk Zona 1-8)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_bulk_zona_1_10" style="text-decoration: none;">Telkomsel (Bulk Zona 1-10)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_bulk_zona_1_11" style="text-decoration: none;">Telkomsel (Bulk Zona 1-11)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_bulk_all_zona" style="text-decoration: none;">Telkomsel (Bulk All Zona)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_malam_00_07" style="text-decoration: none;">Telkomsel (Malam 00-07)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/telkomsel_fix" style="text-decoration: none;">Telkomsel (Fix)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/pake_smartfren" style="text-decoration: none;">Smartfren</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/aktivasi_kpk_tri" style="text-decoration: none;">Aktivasi KPK (Kartu Perdana Kosong) Tri</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/tri_mini" style="text-decoration: none;">Tri (Mini)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/tri_aon" style="text-decoration: none;">Tri (Aon)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/tri_biasa" style="text-decoration: none;">Tri (Biasa)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/tri_getmore" style="text-decoration: none;">Tri (Getmore)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/tri_khusus" style="text-decoration: none;">Tri (Khusus)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/xl_combo" style="text-decoration: none;">XL (Combo)</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/paket_internet/xl_hotrod" style="text-decoration: none;">XL (Hotrod)</a>
                  </div>


              </div>
            </div>
            <div class="card mt-1">
              <div class="card-header bg-dark" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link text-white collapsed py-0" data-toggle="collapse" data-target="#pulsa" aria-expanded="false" aria-controls="pulsa" style="margin-left: -10px;">
                    Pulsa Reguler
                  </button>
                </h5>
              </div>
              <div id="pulsa" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" role="tabpanel">
                <div class="list-group">
                    <a class="list-group-item text-dark py-1" href="/Harga/pulsa/axisxl" style="text-decoration: none;">Axis & XL</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/pulsa/indosat" style="text-decoration: none;">Indosat</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/pulsa/smartfren" style="text-decoration: none;">Smartfren</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/pulsa/telkomsel" style="text-decoration: none;">Telkomsel</a>
                    <a class="list-group-item text-dark py-1" href="/Harga/pulsa/tri" style="text-decoration: none;">Tri</a>
                  </div>
              </div>
            </div>
          </div>


    </div>
    <div class="col-10">


    <div class="table-responsive">
        <table class="table table-bordered table-sm mt-2" id="dataTable">
            <thead class="thead-dark">
              <tr>
              <th colspan="5"><i class="far fa-list-alt"></i>  {{$judul}}</th>
              </tr>
              <tr>
                <th scope="col" class="" style="width:0px">Detail Produk</th>
                <th scope="col" class="" style="width: 80px">Provider</th>
                <th scope="col" class="" >Keterangan</th>
                <th scope="col" class="">Harga</th>
                <th scope="col" class="">Stok</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($arr as $harga)
                @if ($harga->status == "Ada")
                    <tr class="table-success">
                        <th scope="row">{{ $harga->nama_produk }}</th>
                        <td>{{ $harga->nama_provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                    @elseif ($harga->status == "Kosong")
                    <tr class="table-danger">
                        <th scope="row">{{ $harga->nama_produk }}</th>
                        <td>{{ $harga->nama_provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
<div class="mb-5"></div>


@endsection
