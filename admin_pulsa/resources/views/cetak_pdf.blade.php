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
                            <h1 style="text-align:center">Laporan Penjualan</h1>
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
                            <table class="table table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 40px">No.</th>
                                        <th scope="col">Nomor Telepon</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Provider</th>
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
                                        <td>Paket {{$c->pulsa_op}}</td>
                                        <td>{{$c->pulsa_nominal}}</td>
                                        <td>{{$c->tanggal_beli}}</td>
                                        <td>@currency($c->harga_total)</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>@currency($total)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2>Total Pendapatan {{ $tampil }} = @currency($total)</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</body>
</html>
