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
                                    <p class="col-form-label">: Paket Pulsa</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Provider</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: Indosat</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Voucher</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: 10000</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Masa Aktif</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: 10 Hari</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">No. Telepon</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: 0857XXXXXXXX</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tanggal Pembelian</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: NOW</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pembayaran</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: Menunggu</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pengisian</label>
                                <div class="col-sm-7">
                                    <p class="col-form-label">: Menunggu</p>
                                </div>
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
                                    <p class="col-form-label">: BCA</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">No. Rekening</label>
                                <div class="col-sm">
                                    <p class="col-form-label ukuran">: XXX</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Atas Nama</label>
                                <div class="col-sm">
                                    <p class="col-form-label ukuran">: Rahasia</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga</label>
                                <div class="col-sm">
                                    <p class="col-form-label ukuran">: Rp.1</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Kode Unik</label>
                                <div class="col-sm">
                                    <p class="col-form-label ukuran">: Rp.666</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga Total</label>
                                <div class="col-sm">
                                    <p class="col-form-label ukuran">: Rp. 667</p>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <p class="card-text" style="text-align:justify"><small>Produk akan otomatis dikirim setelah Anda mentransfer sesuai dengan permintaan sistem. Pembayaran berlaku sampai dengan <b>19-06-99</b>,
                            Silahkan melakukan transfer sebesar <b>Rp. 667</b> ke nomor rekening diatas
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
