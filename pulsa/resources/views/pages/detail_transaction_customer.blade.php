@extends('layouts.after_login')

@section('title',"TUKUPULSA.COM | Rincian Transaksi")
@section('content')



<div class="card card-default card-primary card-outline">
    <div class="card-header">
        Rincian Transaksi
    </div>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        <p class="login-box-msg mb-2 mt-4 text-danger">{{ $error }} pada form testimoni anda</p>
        @endforeach
    @endif
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
                                    <label class="col-form-label">: Paket {{$hasil->pulsa_type}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Provider</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->pulsa_op }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Voucher</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->pulsa_nominal }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Masa Aktif</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->masaaktif }} Hari</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">No. Telepon</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{$hasil->no_telpon}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tanggal Pembelian</label>
                                <div class="col-sm-7">
                                    <label class="col-form-label">: {{ $hasil->tanggal_beli }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pembayaran</label>
                                @if($hasil->status_pembayaran == 0)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Belum Bayar</label>
                                </div>
                                @elseif($hasil->status_pembayaran == 2)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Gagal</label>
                                </div>
                                @elseif($hasil->status_pembayaran == 1)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Selesai</label>
                                </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Status Pengisian</label>
                                @if($hasil->status_pengisian == 0)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Belum Bayar</label>
                                </div>
                                @elseif($hasil->status_pengisian == 2)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Gagal</label>
                                </div>
                                @elseif($hasil->status_pengisian == 1)
                                <div class="col-sm-7">
                                    <label class="col-form-label">: Selesai</label>
                                </div>
                                @endif
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
                                    <label class="col-form-label">: {{ $hasil->bank }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">No. Rekening</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: {{ $hasil->no_rekening }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Atas Nama</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: {{ $hasil->atas_nama }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: @currency($hasil->pulsa_price)</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Kode Unik</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: @currency($hasil->kode_unik)</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label ukuran">Harga Total</label>
                                <div class="col-sm">
                                    <label class="col-form-label ukuran">: @currency($hasil->harga_total)</label>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <p class="card-text" style="text-align:justify"><small>Produk akan otomatis dikirim setelah Anda mentransfer sesuai dengan permintaan sistem. Pembayaran berlaku sampai dengan <b>{{ $hasil->expired }}</b>,
                            Silahkan melakukan transfer sebesar <b>@currency($hasil->harga_total)</b> ke nomor rekening diatas
                            (Note: Nominal pembayaran harus sama)</small></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button type="button" class="btn btn-outline-warning btn-lg btn-block mt-5 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Komplain
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/astagfirullah/')}}?pesan={{'Sudah+membayar+tapi+status+pengisian+masih+pending'}}&id={{$data}}">Sudah membayar tapi status pengisian masih pending</a>
                <a class="dropdown-item" href="{{url('/astagfirullah/')}}?pesan={{'Keterangan+status+pengisian+sukses+tapi+pulsa+belum+masuk'}}&id={{$data}}">Keterangan status pengisian sukses tapi pulsa belum masuk</a>
                <a class="dropdown-item" href="{{url('/astagfirullah/')}}?pesan={{'Data+transfer+salah'}}&id={{$data}}">Data transfer salah</a>
                <a class="dropdown-item" href="{{url('/astagfirullah/')}}?id={{$data}}">Masalah lainnya</a>
            </div>
        </div>
        @if($hasil->status_transaksi == 1)
        <script>
            alert('Pembelian anda telah berhasil. Berikan testimoni untuk pembelian anda');
        </script>
        <button type="button" class="btn btn-outline-success btn-lg btn-block mt-2" data-toggle="modal" data-target="#exampleModal">
            Beri Testimoni
        </button>
        {{-- <a href="/cetak_pdf/{{$data}}"><button type="button" class="btn btn-outline-success btn-lg btn-block mt-2"></button></a> --}}
        @endif
        <a href="/cetak_pdf/{{$data}}"><button type="button" class="btn btn-outline-info btn-lg btn-block mt-2">Print Pembelian</button></a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Testimoni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/kirim-testimoni-customer" method="post">
                @csrf
            <div class="form-group">
                <label for="tlp">No. Telepon</label>
                    <input type="number" class="form-control" name="no_telpon" id="tlp" value="{{$hasil->no_telpon}}" aria-describedby="tlp" min="0" maxlength="13" required readonly>
                <small id="tlp" class="form-text text-muted">Nomor telpon anda akan disamarkan</small>
            </div>

            <div class="form-group">
                <label for="komentar">Komentar</label>
                <textarea type="text" class="form-control" name="komentar" id="komentar" placeholder="Berikan komentar anda" required></textarea>
            </div>

            <div class="form-group">
                <label for="vol">Beri Rating</label>
                <input type="range" class="form-control" name="rating" id="vol" min="1" max="5" value="1" oninput="nilai(value)" required>
                <small class="form-text text-muted">Anda memberikan rating <output for="vol" id="volume">1</output></small>
            </div>

        </div>
        <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button> --}}
        <button type="submit" class="btn btn-success">Simpan</button>
        </form>
        </div>
    </div>
    </div>
</div>



<script>
    function nilai(vol) {
        document.querySelector('#volume').value = vol;
    }
</script>
@endsection
