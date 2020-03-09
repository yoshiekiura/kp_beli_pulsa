@extends('layouts.form_customer')

@section('title',"TUKUPULSA.COM | Rincian Transaksi")
@section('header',"Rincian Transaksi")
@section('content')

<section class="about-area ptb-90" id="listHarga">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Rincian Transaksi anda</p>
                </div>
            </div>
        </div>
        <div class="single-about-box">
        <div class="row">
            <div class="col-lg-6">
                <div class="card text-left">
                    <div class="card-header">
                        Pembelian
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Produk</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Paket Pulsa</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Provider</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Indosat</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Voucher</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: 10000</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Masa Aktif</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: 10 Hari</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">No. Telepon</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: 0857XXXXXXXX</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tanggal Pembelian</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: NOW</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pembayaran</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Menunggu</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pengisian</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Menunggu</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-left">
                    <div class="card-header">
                    Metode Pembayaran
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Pembayaran</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: BCA</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">No. Rekening</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: XXX</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Atas Nama</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: Rahasia</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: Rp.1</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Kode Unik</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: Rp.666</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga Total</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: Rp. 667</label>
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
</section><!-- about section end -->

@endsection
