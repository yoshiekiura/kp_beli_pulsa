@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')

<div id="pageone">
    <section class="section">

          <div class="container animated bounceInDown delay-0s">
            <div class="card shadow-lg border-1 rounded-lg">
              <div class="card-body mb-5">
                <div class="text-dark text-center">
                    <p class="pfirst animated bounceInDown delay-1s">Mau pulsa murah tapi nggak ribet ?</p>
                    <p class="psecond animated bounceInDown delay-2s">PESAN DISINI AJA</p>
                    <p class="pthird animated bounceInDown delay-2s">TUKUPULSA.COM</p>
                    <p class="pfourth animated bounceInDown delay-3s">Ada untuk Anda.</p>
                    <a type="button" class="btn btn-primary animated bounceInDown delay-3s" id="beli" href="#pilih-paket">Beli Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        </div>

        <div class="separator">
            <h3>Pilih Paket</h3>
        </div>

<div id="pilih-paket">
    <section class="section">
        <div class="container turuninDikit">
            <div class="row  animated fadeInUp delay-0s">
                <div class="col mb-3">
                    <div class="card shadow-lg border-1 rounded-lg">
                        <form action="/beli" method="post">
                        <h2 class="judul-order">Pulsa Reguler</h2>
                        <div class="form-group form-group-ukuran">
                            <select name="nama_provider" id="nama_provider" class="browser-default custom-select dynamic1" data-dependent="keterangan">
                                <option selected disabled value="">Select Provider</option>
                                @foreach ($produk_pulsa as $p)
                                    <option value="{{ $p->nama_provider}}">{{ $p->nama_provider}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group form-group-ukuran">
                        <select name="keterangan" id="keterangan1" class="browser-default custom-select opsi-pulsa" >
                            <option value="">Select Voucher</option>
                        </select>
                    </div>
                    @csrf
                    <div class="form-group form-group-ukuran">
                        <input type="text" name="nomor" class="form-control" placeholder="Nomor HP">
                    </div>
                    <div class="form-group form-group-ukuran">
                        <select name="bank" class="browser-default custom-select">
                            <option selected disabled>-- Pilih Pembayaran --</option>
                            <option value="BNI">BNI</option>
                            <option value="BRI">BRI</option>
                            <option value="JATIM">Bank Jatim</option>
                        </select>
                    </div>
                    <div class="form-group form-group-ukuran">
                        <h2 class="harga hr1">RP -</h2>
                        <input type="hidden" name="harga" id="hr1" readonly>
                        <input type="hidden" name="kode"  id="kode1" readonly>
                    </div>
                    <div class="form-group form-group-ukuran">
                        <button type="submit" class="btn btn-outline-primary btn-pesan">PESAN SEKARANG</button>
                    </div>
                    </form>
                </div>
            </div>

                <div class="col">
                    <div class="card shadow-lg border-1 rounded-lg">
                        <h2 class="judul-order">Paket Internet</h2>
                        <form action="/beli" method="post">
                            <div class="form-group form-group-ukuran">
                                <select name="provider" id="nama_provider" class="browser-default custom-select dynamic2" data-dependent="keterangan">
                                    <option value="">Select Provider</option>
                                    @foreach ($produk_internet as $p)
                                        <option value="{{ $p->nama_provider}}">{{ $p->nama_provider}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <select name="keterangan" id="keterangan2" class="browser-default custom-select opsi-paket" >
                                <option value="">Select Voucher</option>
                                </select>
                            </div>
                            @csrf
                            <div class="form-group form-group-ukuran">
                                <input type="text" name="nomor" class="form-control" placeholder="Nomor HP">
                            </div>
                            <div class="form-group form-group-ukuran">
                                <select name="bank" class="browser-default custom-select">
                                    <option selected disabled>-- Pilih Pembayaran --</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="JATIM">Bank Jatim</option>
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <h2 class="harga hr2" name="harga">RP -</h2>

                                <input type="hidden" name="harga" id="hr2" readonly>
                                <input type="hidden" name="kode"  id="kode2" readonly>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <button type="submit" class="btn btn-outline-primary btn-pesan">PESAN SEKARANG</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>


<div class="backTop">Back to Top</div>

<script>
    $(document).ready(function(){

        $('#beli').click(function(){
            $('.card').addClass(' animated fadeInUp delay-1s');
        });

        $('.dynamic1').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url("dynamicdependent/cari")}}',
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('.opsi-pulsa').html(result);
                    }
                })
            }
        });

        $('.dynamic2').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url("dynamicdependent/cari")}}',
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('.opsi-paket').html(result);
                    }
                })
            }
        });

        $('#keterangan1').change(function(){
            var provider = $('.dynamic1').val();
            var ket = $(this).val();
            var _token = $('input[name="_token"]').val();
            //console.log(ket);

            $.ajax({
                url: '{{ url("dynamicdependent/bawaKodeHarga") }}',
                method: 'POST',
                data:{keterangan:ket, _token:_token},
                dataType: "JSON",
                success:function(data){
                    //console.log(data);

                    $('.hr1').html("RP. "+ data.harga);
                    $('#hr1').val(data.harga);
                    $('#kode1').val(data.kode);
                }
            });
        });

        $('#keterangan2').change(function(){
            var provider = $('.dynamic2').val();
            var ket = $(this).val();
            var _token = $('input[name="_token"]').val();
            //console.log(ket);

            $.ajax({
                url: '{{ url("dynamicdependent/bawaKodeHarga") }}',
                method: 'POST',
                data:{keterangan:ket, _token:_token},
                dataType: "JSON",
                success:function(data){
                    //console.log(data);

                    $('.hr2').html("RP. "+ data.harga);
                    $('#hr2').val(data.harga);
                    $('#kode2').val(data.kode);
                }
            });
        });
    });
</script>

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
