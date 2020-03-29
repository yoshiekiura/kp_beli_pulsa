<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
    </style>
</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">

        <section class="hero-area breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hero-area-content">
							<h1 style="text-align:center">Rincian Transaksi</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- hero area end -->
        <section class="about-area ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card text-left">
                            <div class="card-header">
                                <h3>Pembelian</h3>
                            </div>
                            <table>
                                <tr>
                                  <th>Produk</th>
                                  <td>: Paket {{$hasil->pulsa_type}}</td>
                                </tr>
                                <tr>
                                  <th>Provider</th>
                                  <td>: {{ $hasil->pulsa_op }}</td>
                                </tr>
                                <tr>
                                  <th>Voucher</th>
                                  <td>: {{ $hasil->pulsa_nominal }}</td>
                                </tr>
                                <tr>
                                  <th>Masa Aktif</th>
                                  <td>: {{ $hasil->masaaktif }} Hari</td>
                                </tr>
                                <tr>
                                  <th>No. Telepon</th>
                                  <td>: {{$hasil->no_telpon}}</td>
                                </tr>
                                <tr>
                                  <th>Tanggal Pembelian</th>
                                  <td>: {{ $hasil->tanggal_beli }}</td>
                                </tr>
                                <tr>
                                    <th>Status Pembayaran</th>
                                    @if($hasil->status_pembayaran == 0)
                                        <td>: Belum Bayar</td>
                                    @elseif($hasil->status_pembayaran == 2)
                                        <td>: Gagal</td>
                                    @elseif($hasil->status_pembayaran == 1)
                                        <td>: Sudah Bayar</td>
                                    @endif
                                </tr>
                                <tr>
                                    <th>Status Pengisian</th>
                                    @if($hasil->status_pembayaran == 0)
                                        <td>: Menunggu</td>
                                    @elseif($hasil->status_pembayaran == 2)
                                        <td>: Gagal</td>
                                    @elseif($hasil->status_pembayaran == 1)
                                        <td>: Sudah Diisi</td>
                                    @endif
                                  </tr>
                              </table><br>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-left">
                            <div class="card-header">
                            <h3>Metode Pembayaran</h3>
                            </div>
                            <table>
                                <tr>
                                  <th>Pembayaran</th>
                                  <td>: {{ $hasil->bank }}</td>
                                </tr>
                                <tr>
                                  <th>No. Rekening</th>
                                  <td>: {{ $hasil->no_rekening }}</td>
                                </tr>
                                <tr>
                                  <th>Atas Nama</th>
                                  <td>: {{ $hasil->atas_nama }}</td>
                                </tr>
                                <tr>
                                  <th>Harga</th>
                                  <td>: @currency($hasil->pulsa_price)</td>
                                </tr>
                                <tr>
                                  <th>Kode Unik</th>
                                  <td>: @currency($hasil->kode_unik)</td>
                                </tr>
                                <tr>
                                  <th>Harga Total</th>
                                  <td>: @currency($hasil->harga_total)</td>
                                </tr>
                                <br>
                                <p class="card-text" style="text-align:justify"><small>Produk akan otomatis dikirim setelah Anda mentransfer sesuai dengan permintaan sistem. Pembayaran berlaku sampai dengan <b>{{ $hasil->expired }}</b>,
                                Silahkan melakukan transfer sebesar <b>@currency($hasil->harga_total)</b> ke  nomor rekening diatas (Note: Nominal pembayaran harus sama)</small></p>
                              </table><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</body>
</html>
