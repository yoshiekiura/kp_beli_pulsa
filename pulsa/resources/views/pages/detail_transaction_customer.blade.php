@extends('layouts.after_login')

@section('title',"TUKUPULSA.COM | Rincian Transaksi")
@section('content')



<div class="card card-default card-primary card-outline">
    <div class="card-header">
        Rincian Transaksi
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-left">
                    <div class="card-header">
                        <label>Pembelian</label>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Produk</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Paket {{$hasil->pulsa_type}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Provider</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->pulsa_op }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Voucher</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->pulsa_nominal }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Masa Aktif</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->masaaktif }} Hari</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">No. Telepon</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{$hasil->no_telpon}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tanggal Pembelian</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->tanggal_beli }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pembayaran</label>
                                @if($hasil->status_pembayaran == 0)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Belum Bayar</label>
                                </div>
                                @elseif($hasil->status_pembayaran == 1)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Pending</label>
                                </div>
                                @elseif($hasil->status_pembayaran == 3)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Selesai</label>
                                </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pengisian</label>
                                @if($hasil->status_pengisian == 0)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Belum Bayar</label>
                                </div>
                                @elseif($hasil->status_pengisian == 1)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Pending</label>
                                </div>
                                @elseif($hasil->status_pengisian == 3)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Selesai</label>
                                </div>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-left">
                    <div class="card-header">
                    <label>Metode Pembayaran</label>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Pembayaran</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->bank }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">No. Rekening</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: {{ $hasil->no_rekening }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Atas Nama</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: {{ $hasil->atas_nama }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: @currency($hasil->pulsa_price)</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Kode Unik</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: @currency($hasil->kode_unik)</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga Total</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: @currency($hasil->harga_total)</label>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <p class="card-text" style="text-align:justify"><small>Produk akan otomatis dikirim setelah Anda mentransfer sesuai dengan permintaan sistem. Pembayaran berlaku sampai dengan <b>{{ $hasil->expired }}</b>,
                            Silahkan melakukan transfer sebesar <b>@currency($hasil->harga_total)</b> ke nomor rekening diatas
                            (Note: Nominal pembayaran harus sama)</small></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-warning btn-lg btn-block mt-5">Komplain</button>
        <button type="button" class="btn btn-outline-info btn-lg btn-block mt-2">Print Pembelian</button>
    </div>
</div>


@endsection
