
@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')

<div id="pageone">
    <section class="section">
       
                        
          <div class="container animated bounceInDown delay-0s">
            <div class="card shadow-lg border-1 rounded-lg">
              <div class="card-body mb-3">
                <div class="text-dark text-center">
                    <p class="pfirst animated bounceInDown delay-1s">Mau pulsa murah tapi nggak ribet ?</p>
                    <p class="psecond animated zoomIn delay-1s">PESAN DISINI AJA</p>
                    <p class="pthird animated zoomIn delay-1s">TUKUPULSA.COM</p>
                    <p class="pfourth animated bounceInUp delay-1s">Ada untuk Anda.</p>
                    <a type="button" class="btn btn-primary animated jackInTheBox delay-2s" id="beli" href="#pilih-paket">Beli Sekarang</a>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alarm mt-3 animated jackInTheBox delay-2s">
                                <h3>Kesalahan Pengisian</h3>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                        @endif
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
                        <select name="voucher" id="keterangan1" class="browser-default custom-select opsi-pulsa" >
                            <option value="" selected>Select Voucher</option>
                        </select>
                    </div>
                    @csrf
                    <div class="form-group form-group-ukuran">
                        <input type="number" name="nomor" class="form-control" placeholder="Nomor HP">
                    </div>
                    <div class="form-group form-group-ukuran">
                        <select name="bank" class="browser-default custom-select">
                            <option selected disabled>-- Pilih Pembayaran --</option>
                            @foreach ($bank as $b)
                                    <option value="{{$b->id}}">{{  $b->nama_bank }}</option>
                                    @endforeach
                        </select>
                    </div>
                    <div class="form-group form-group-ukuran">
                        <h2 class="harga hr1">RP -</h2>
                        <input type="hidden" name="harga" id="hr1" readonly>
                        <input type="hidden" name="kode"  id="kode1" readonly>
                        <input type="hidden" name="nama_produk" id="produk1" readonly>
                        <input type="hidden" name="keterangan" id="ket1" readonly>
                        <input type="hidden" name="aku" value="{{base64_encode($unik)}}" readonly>
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
                        {{-- @if (count($errors) > 0)
                        <div class="alert alert-danger alarm">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                        @endif --}}
                        <form action="/beli" method="post">
                            <div class="form-group form-group-ukuran">
                                <select name="nama_provider" id="nama_provider" class="browser-default custom-select dynamic2" data-dependent="keterangan">
                                    <option value="">Select Provider</option>
                                    @foreach ($produk_internet as $p)
                                        <option value="{{ $p->nama_provider}}">{{ $p->nama_provider}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <select name="voucher" id="keterangan2" class="browser-default custom-select opsi-paket" >
                                <option value="" selected>Select Voucher</option>
                                </select>
                            </div>
                            @csrf
                            <div class="form-group form-group-ukuran">
                                <input type="number" name="nomor" class="form-control" placeholder="Nomor HP">
                            </div>
                            <div class="form-group form-group-ukuran">
                                <select name="bank" class="browser-default custom-select">
                                    <option selected disabled>-- Pilih Pembayaran --</option>
                                    @foreach ($bank as $b)
                                    <option value="{{$b->id}}">{{  $b->nama_bank }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <h2 class="harga hr2" name="harga">RP -</h2>

                                <input type="hidden" name="harga" id="hr2" readonly>
                                <input type="hidden" name="kode"  id="kode2" readonly>
                                <input type="hidden" name="nama_produk" id="produk2" readonly>
                                <input type="hidden" name="keterangan" id="ket2" readonly>
                                <input type="hidden" name="aku" value="{{base64_encode($unik)}}" readonly>
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
                    $('#produk1').val(data.nama_produk);
                    $('#ket1').val(data.keterangan);
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
                    $('#produk2').val(data.nama_produk);
                    $('#ket2').val(data.keterangan);
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
