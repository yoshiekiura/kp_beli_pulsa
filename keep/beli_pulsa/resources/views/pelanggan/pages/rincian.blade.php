@extends('layout/main')
@section('title','Rincian Transaksi')

@section('body')
    {{-- @if(!Session::get('nama'))
        @php
            header("Location: " . URL::to('/Login/cobapaksa'));
            exit();
        @endphp
    @endif   --}}
    <div class="container tambah_bawah">
    <h1 class="mt-4">Rincian Transaksi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item">Rincian Transaksi</li>
    </ol>

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
                                <label for="staticEmail" class="col-form-label">Paket {{ $hasil->pulsa_type }}</label>
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
                        @if($hasil->status_transaksi == 0)
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">Menunggu</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pengisian</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">Menunggu</label>
                            </div>
                        </div>
                        @endif
                        @if($hasil->status_transaksi == 1)
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">Proses</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pengisian</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">Proses</label>
                            </div>
                        </div>
                        @endif
                        @if($hasil->status_transaksi == 2)
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">Selesai</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-5 col-form-label">Status Pengisian</label>
                            <div class="col-sm-7">
                                <label for="staticEmail" class="col-form-label">Selesai</label>
                            </div>
                        </div>
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                <a href="/cetak_pdf/{{$hasil->id}}" target="_blank"><i class="fas fa-print"></i> PRINT</a>
                    <div class="btn-group dropup float-right">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-exclamation"></i> Komplain
                        </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{url('/Komplain')}}?pesan={{'Sudah+membayar+tapi+status+pembayaran+masih+pending'}}">Sudah membayar tapi status pembayaran masih pending</a>
                                <a class="dropdown-item" href="{{url('/Komplain')}}?pesan={{'Sudah+membayar+tapi+status+pengisian+masih+pending'}}">Sudah membayar tapi status pengisian masih pending</a>
                                <a class="dropdown-item" href="{{url('/Komplain')}}?pesan={{'Keterangan+status+pengisian+sukses+tapi+pulsa+belum+masuk'}}">Keterangan status pengisian sukses tapi pulsa belum masuk</a>
                                <a class="dropdown-item" href="{{url('/Komplain')}}?pesan={{'Data+transfer+salah'}}">Data transfer salah</a>
                                <a class="dropdown-item" href="{{url('/Komplain')}}?pesan={{''}}">Masalah lainnya</a>
                            </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                Pembayaran
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
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


@endsection
