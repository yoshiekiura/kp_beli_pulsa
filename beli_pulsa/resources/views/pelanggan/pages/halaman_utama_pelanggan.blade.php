@extends('layout/main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')
<div class="card" style="margin-top: 130px;margin-bottom: 100px">
    <div class="card-body">
        <div class="card" id="kanan">
            <h2 style="color:#fff;
            font-size: 26px;
            font-weight: 700;
            text-transform: uppercase;
            display: block;
            text-align: center;
            background-color:black;
            margin: 20px 200px 20px 200px;
            border-radius: 5px;"><div style="padding: 5px 0px 5px 0px">Order</div></h2>
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <select name="detail_produk" id="detail_produk" class="browser-default custom-select dynamic" data-dependent="provider">
                        <option selected disabled value="">Select Produk</option>                       
                        @foreach ($produk as $p)
                            <option value="{{ $p->detail_produk}}">{{ $p->detail_produk}}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <select name="provider" id="provider" class="browser-default custom-select dynamic" data-dependent="keterangan">
                        <option value="">Select Provider</option>
                    </select>
                </div>
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <select name="keterangan" id="keterangan" class="browser-default custom-select" >
                        <option value="">Select Keterangan</option>
                    </select>
                </div>
                @csrf
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <input type="text" class="form-control" placeholder="Nomor HP">
                </div>
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <select class="browser-default custom-select">
                        <option selected disabled>-- Pilih Pembayaran --</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <h2 style="color: black;
                        font-size: 26px;
                        font-weight: 700;
                        text-transform: uppercase;
                        display: block;
                        text-align: center;">RP -</h2>
                </div>
                <div class="form-group" style="margin: 0px 30px 15px 30px;">
                    <button style="width: 100%; border-width: 3px; font-size: 20px; font-weight: bold; " type="button" class="btn btn-outline-primary">PESAN SEKARANG</button>
                </div>

        </div>

        <div class="kiri">
            <p style="font-size: 20px; font-weight: bold; text-align: center; margin-top: 100px; margin-left: -20px;">Mau pulsa murah tapi nggak ribet ?</p>
            <p style="font-size: 50px; font-weight: bold; text-align: center; margin-left: -20px; margin-bottom: 0px;">PESAN DISINI AJA</p>
            <p style="font-size: 50px; font-weight: bold; text-align: center; margin-left: -20px;">TUKUPULSA.COM</p>
            <p style="font-size: 20px; font-weight: bold; text-align: center; margin-top: 50px; margin-left: -20px;">Ada untuk Anda.</p>
        </div>



        <div style="clear: both;"></div>
    </div>
</div>
<br>



    @if(Session::has('Logout'))
        <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Logout') !!}</em></div>
    @endif

    <script>
        $(document).ready(function(){

            $('.dynamic').change(function(){
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
                            $('#'+dependent).html(result);
                        } 
                    })
                }
            });
        });
    </script>

@endsection


