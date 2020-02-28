<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="row mt-5 mb-5">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    Rincian Transaksi
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Produk</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->pulsa_type }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Provider</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->pulsa_op }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Voucher</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->pulsa_nominal }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Masa Aktif</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->masaaktif }} Hari</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">No. Telepon</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->no_telpon }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Pembayaran</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->bank }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Tanggal Pembelian</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->tanggal_beli }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{$hasil->status_pembayaran}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pengisian</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">{{ $hasil->status_pengisian }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label ukuran">No. Rekening</label>
                            <div class="col-sm">
                                <label for="staticEmail" class="col-form-label ukuran">{{ $hasil->no_rekening }} </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label ukuran">Atas Nama</label>
                            <div class="col-sm">
                                <label for="staticEmail" class="col-form-label ukuran">{{ $hasil->atas_nama }}  </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label ukuran">Harga</label>
                            <div class="col-sm">
                                <label for="staticEmail" class="col-form-label ukuran">@currency($hasil->pulsa_price)</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label ukuran">Kode Unik</label>
                            <div class="col-sm">
                                <label for="staticEmail" class="col-form-label ukuran">@currency($hasil->kode_unik)</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label ukuran">Harga Total</label>
                            <div class="col-sm">
                                <label for="staticEmail" class="col-form-label ukuran">@currency($hasil->harga_total) </label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <p class="card-text" style="text-align:justify"><small>Produk akan otomatis dikirim setelah Anda mentransfer sesuai dengan permintaan sistem. Pembayaran berlaku sampai dengan <b>{{($hasil->expired) }}</b>,
                        Silahkan melakukan transfer sebesar <b>@currency($hasil->harga_total)</b> ke nomor rekening diatas
                        (Note: Nominal pembayaran harus sama)</small></p>
                    </li>
                </ul>
              </div>
        </div>
    </div>

</div>

</body>
</html>
