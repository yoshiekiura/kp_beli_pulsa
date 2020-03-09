@extends('layouts.form_customer')


@section('title',"TUKUPULSA.COM | Cek Transaksi")
@section('header',"Cek Transaksi")

@section('content')

<section class="about-area ptb-90" id="listHarga">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Untuk mengecek riwayat pembelian anda, silahkan masukkan nomor telephone anda</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="single-about-box">
                    {{-- <i class="icofont icofont-ruler-pencil"></i>
                    <h4>Responsive Design</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p> --}}
                    <form action="#" method="post">
                        @csrf
                        <div class="input-group mb-3">
                                <input type="number" name="nomor" class="form-control" placeholder="Masukkan Nomor Telepon" aria-label="Masukkan Nomor Telepon" aria-describedby="button-addon">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning" type="submit" id="button-addon" style="margin-bottom:0">Cek</button>
                                </div>
                        </div>
                    </form>
                    <table class="table" id="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal Beli</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Lihat</th>
                            </tr>
                        </thead>
                        </table>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
