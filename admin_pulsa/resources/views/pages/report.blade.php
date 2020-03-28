@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Daftar Pelanggan")
@section('header',"Laporan Bulanan")
@section('content')

<div class="card card-default card-primary card-outline collapsed-card">
    <div class="card-header">
        <h5 class="card-title">Filter</h5>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="/get-laporan" method="get">
                    @csrf
                    <div class="form-group row">
                      <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="Bulan" name="bulan">
                            <option disabled selected>Pilih Bulan Penjualan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                      <div class="col-sm-10">
                        {{-- <input type="number" name="tahun" class="form-control" id="tahun"> --}}
                        <select name="tahun" class="form-control" id="tahun">
                            <option disabled selected>Pilih Tahun Penjualan</option>
                            <?php
                                $thn_skr = date('Y');
                                    for ($x = $thn_skr; $x >= 2010; $x--) :
                            ?>
                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                            <?php
                                    endfor;
                            ?>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg btn-block">Lihat</button>
                </form>
            </div>
        </div>

    </div>
    </div>
</div>
<div class="card card-default card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                                <tr>
                                <th scope="col" style="width: 40px">No.</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Type Pembelian</th>
                                <th scope="col">Voucher</th>
                                <th scope="col">Tanggal Beli</th>
                                <th scope="col">Harga Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cari as $c)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{$c->no_telpon}}</td>
                                <td>Paket {{$c->pulsa_type}}</td>
                                <td>{{$c->pulsa_nominal}}</td>
                                <td>{{$c->tanggal_beli}}</td>
                                <td>@currency($c->harga_total)</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h2 class="mt-4 text-center">Total Pendapatan {{ $tampil }} = @currency($total)</h2>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <a href="/laporan-bulanan" class="btn btn-secondary btn-lg btn-block">Reset</a>
            </div>
            <div class="col-10">
                <button type="submit" class="btn btn-success btn-lg btn-block">Print Pdf</button>
            </div>
        </div>
    </div>
</div>

@endsection
