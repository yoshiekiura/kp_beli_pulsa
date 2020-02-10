@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')

<div id="pageone">
    <section class="section">

          <div class="container">
            <div class="card shadow-lg border-1 rounded-lg">
              <div class="card-body">
                <div class="text-dark text-center">
                    <p class="pfirst">Mau pulsa murah tapi nggak ribet ?</p>
                    <p class="psecond">PESAN DISINI AJA</p>
                    <p class="pthird">TUKUPULSA.COM</p>
                    <p class="pfourth">Ada untuk Anda.</p>
                    <a type="button" class="btn btn-primary" href="#pagetwo">Beli Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        </div>

        <div class="separator">
            <h3>Pilih Paket</h3>
        </div>

<div id="pagetwo">
    <section class="section">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col mb-3">
                    <div class="card shadow-lg border-1 rounded-lg">
                        <h2 class="judul-order">Pulsa Reguler</h2>

                    <div class="form-group form-group-ukuran">
                        <select name="provider" id="nama_provider" class="browser-default custom-select dynamic" data-dependent="keterangan">
                            <option value="">Select Provider</option>
                        </select>
                    </div>
                    <div class="fform-group form-group-ukuran">
                        <select name="keterangan" id="keterangan" class="browser-default custom-select" >
                        <option value="">Select Voucher</option>
                        </select>
                    </div>

                    <div class="form-group form-group-ukuran">
                        <input type="text" class="form-control" placeholder="Nomor HP">
                    </div>
                    <div class="form-group form-group-ukuran">
                        <select class="browser-default custom-select">
                            <option selected disabled>-- Pilih Pembayaran --</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group form-group-ukuran">
                        <h2 class="harga">RP -</h2>
                    </div>
                    <div class="form-group form-group-ukuran">
                        <button type="submit" class="btn btn-outline-primary btn-pesan">PESAN SEKARANG</button>
                    </div>
                </div>
            </div>

                <div class="col">
                    <div class="card shadow-lg border-1 rounded-lg">
                        <h2 class="judul-order">Paket Internet</h2>


                            <div class="form-group form-group-ukuran">
                                <select name="provider" id="nama_provider" class="browser-default custom-select dynamic" data-dependent="keterangan">
                                    <option value="">Select Provider</option>
                                </select>
                            </div>
                            <div class="fform-group form-group-ukuran">
                                <select name="keterangan" id="keterangan" class="browser-default custom-select" >
                                <option value="">Select Voucher</option>
                                </select>
                            </div>

                            <div class="form-group form-group-ukuran">
                                <input type="text" class="form-control" placeholder="Nomor HP">
                            </div>
                            <div class="form-group form-group-ukuran">
                                <select class="browser-default custom-select">
                                    <option selected disabled>-- Pilih Pembayaran --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <h2 class="harga">RP -</h2>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <button type="submit" class="btn btn-outline-primary btn-pesan">PESAN SEKARANG</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>



<div class="backTop">Back to Top</div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        var $backToTop = $(".backTop");
        $backToTop.hide();
        $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $backToTop.fadeIn();
        } else {
            $backToTop.fadeOut();
        }
        });

        $backToTop.on('click', function(e) {
        $("html, body").animate({scrollTop: 0}, 500);
        });
    </script>

@endsection