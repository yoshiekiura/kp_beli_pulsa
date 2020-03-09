@extends('layouts.main')

@section('title',"TUKUPULSA.COM")
@section('content')


		<!-- hero area start -->
<section class="hero-area" id="home">
    <div class="player" data-property="{videoURL:'http://youtu.be/kn-1D5z3-Cs',containment:'#home',autoPlay:true, mute:true, startAt:0, showControls:false, loop:true, opacity:1}"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-area-content">
                    <h1>TUKUPULSA.COM</h1>
                    <p>Pesan pulsa dan paket data disini aja. Kami ada untuk anda</p>
                    <a href="/daftar" class="appao-btn">Daftar Sekarang</a>
                    <a href="/login" class="appao-btn">Login</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hand-mockup text-lg-left text-center">
                    <img src="assets/img/hand-mockup_MI.png" alt="Hand Mockup" />
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- about section start -->
<section class="about-area ptb-90" id="listHarga">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Daftar Harga<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Lihat paket yang anda inginkan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="semua-tab" data-toggle="tab" href="#semua" role="tab" aria-controls="semua" aria-selected="true">Lihat Semua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pulsa" role="tab" aria-controls="pulsa" aria-selected="false">Pulsa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="false">Data</a>
                    </li>
                </ul>
            </div>
            <div class="single-about-box">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">
                        <div class="table-responsive">
                            <table class="table" id="daftarHargaSemua">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 100px">Type Produk</th>
                                        <th scope="col" style="width: 150px">Operator</th>
                                        <th scope="col" style="width: 350px">Nama Produk</th>
                                        <th scope="col" style="width: 90px">Masa Aktif</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 70px">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pulsa" role="tabpanel" aria-labelledby="pulsa-tab">
                        <div class="table-responsive">
                            <table class="table" id="daftarHargaPulsa">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 100px">Type Produk</th>
                                        <th scope="col" style="width: 150px">Operator</th>
                                        <th scope="col" style="width: 350px">Nama Produk</th>
                                        <th scope="col" style="width: 90px">Masa Aktif</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 70px">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">+</th>
                                        <td>+</td>
                                        <td>+</td>
                                        <td>+</td>
                                        <td>+</td>
                                        <td>+</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="data" role="tabpanel" aria-labelledby="data-tab">
                        <div class="table-responsive">
                            <table class="table" id="daftarHargaData">
                                <thead>
                                        <tr>
                                        <th scope="col" style="width: 100px">Type Produk</th>
                                        <th scope="col" style="width: 150px">Operator</th>
                                        <th scope="col" style="width: 350px">Nama Produk</th>
                                        <th scope="col" style="width: 90px">Masa Aktif</th>
                                        <th scope="col" style="width: 90px">Harga</th>
                                        <th scope="col" style="width: 70px">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">@</th>
                                        <td>@</td>
                                        <td>@</td>
                                        <td>@</td>
                                        <td>@</td>
                                        <td>@</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- about section end -->

<!-- pricing section start -->
<section class="pricing-area ptb-90" id="beli">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Beli Sekarang<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Beli paket yang anda inginkan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-pricing-box">
                    <div class="pricing-top">
                        <h4>Paket Pulsa</h4>
                        <p>Beli pulsa disini aja</p>
                    </div>
                    <div class="price">
                        <span>Rp.</span><h1>1000</h1>
                        <p>Harga</p>
                    </div>
                    <div class="price-details">
                        <ul>
                            {{-- <li>Email Marketing</li>
                            <li>Email Builder</li>
                            <li>Client Testing</li>
                            <li>Multiple Email Support</li>
                            <li>Email Read Receipent</li>
                            <li>2 User Free</li> --}}
                            <select class="form-control mb-3">
                                <option>-- Pilih Operator --</option>
                            </select>

                            <select class="form-control mb-3">
                                <option>-- Pilih Nama Produk --</option>
                            </select>

                            <input class="form-control" type="text" placeholder="-- Masa Aktif --" disabled>
                            <input class="form-control" type="number" placeholder="-- Nomor Telepon --">

                            <select class="form-control mb-3">
                                <option>-- Pilih Pembayaran --</option>
                            </select>

                            <input type="hidden" name="harga" id="hr2" readonly>
                            <input type="hidden" name="kode"  id="kode2" readonly>
                        </ul>
                        <a href="/rincian-transaksi"><button class="appao-btn" type="submit">Pesan Sekarang</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-pricing-box">
                    <div class="pricing-top">
                        <h4>Paket Data</h4>
                        <p>Beli paket data disini aja</p>
                    </div>
                    <div class="price">
                        <h1><span>$</span>199</h1>
                        <p>Harga</p>
                    </div>
                    <div class="price-details">
                        <ul>
                            {{-- <li>Email Marketing</li>
                            <li>Email Builder</li>
                            <li>Client Testing</li>
                            <li>Multiple Email Support</li>
                            <li>Email Read Receipent</li>
                            <li>2 User Free</li> --}}
                            <select class="form-control mb-3">
                                <option>-- Pilih Operator --</option>
                            </select>

                            <select class="form-control mb-3">
                                <option>-- Pilih Nama Produk --</option>
                            </select>

                            <input class="form-control" type="text" placeholder="-- Masa Aktif --" disabled>
                            <input class="form-control" type="number" placeholder="-- Nomor Telepon --">

                            <select class="form-control mb-3">
                                <option>-- Pilih Pembayaran --</option>
                            </select>

                            <input type="hidden" name="harga" id="hr2" readonly>
                            <input type="hidden" name="kode"  id="kode2" readonly>
                        </ul>
                        <button class="appao-btn" type="submit">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- pricing section end -->
<!-- testimonial section start -->
<section class="testimonial-area ptb-90" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Testimoni<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Lihat Testimoni dari beberapa pelanggan yang pernah beli di TUKUPULSA</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-wrap">
                    <div class="single-testimonial-box">
                        <div class="author-img">
                            <img src="assets/img/author/author1.jpg" alt="author" />
                        </div>
                        <h5>Mary Balogh</h5>
                        <p>Wadidaw, Pulsanya cepet banget masuknya. Good</p>
                        <div class="author-rating">
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="author-img">
                            <img src="assets/img/author/author2.jpg" alt="author" />
                        </div>
                        <h5>Upik Balogh</h5>
                        <p>Pengen beli pulsa tapi gaada duit hehehe</p>
                        <div class="author-rating">
                            <i class="icofont icofont-star"></i>

                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="author-img">
                            <img src="assets/img/author/author2.jpg" alt="author" />
                        </div>
                        <h5>Samsudin</h5>
                        <p>Jadi ketagihan beli data disini</p>
                        <div class="author-rating">
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-thumb">
                    <div class="thumb-prev">
                        <div class="author-img">
                            <img src="assets/img/author/author2.jpg" alt="author" />
                        </div>
                    </div>
                    <div class="thumb-next">
                        <div class="author-img">
                            <img src="assets/img/author/author2.jpg" alt="author" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- testimonial section end -->
<!-- counter section start -->
<section class="counter-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-counter-box">
                    <i class="icofont icofont-heart-alt"></i>
                    <h1><span class="counter">9798</span></h1>
                    <p>Happy Client</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-counter-box">
                    <i class="icofont icofont-protect"></i>
                    <h1><span class="counter">9798</span></h1>
                    <p>Completed Project</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-counter-box">
                    <i class="icofont icofont-download-alt"></i>
                    <h1><span class="counter">979</span>K</h1>
                    <p>Apps Download</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-counter-box">
                    <i class="icofont icofont-trophy"></i>
                    <h1><span class="counter">250</span></h1>
                    <p>Our Award</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- counter section end -->
<!-- team section start -->
<section class="team-area ptb-90" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Team Magang<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Biodata mahasiswa magang dari Universitas 17 Agustus 1945 Surabaya</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6"></div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team/ilyas.jpeg" alt="team">
                        <div class="team-member-icon">
                            <div class="display-table">
                                <div class="display-tablecell">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-info">
                        <a href="#"><h4>Ilyas Istiqama</h4></a>
                        <p>1461700047</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team/rendy.jpeg" alt="team">
                        <div class="team-member-icon">
                            <div class="display-table">
                                <div class="display-tablecell">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-info">
                        <a href="#"><h4>Rendy Cahya</h4></a>
                        <p>1461700008</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6"></div>
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="single-team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team/team3.jpg" alt="team">
                        <div class="team-member-icon">
                            <div class="display-table">
                                <div class="display-tablecell">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-info">
                        <a href="#"><h4>Elijah Henderson</h4></a>
                        <p>UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team/team4.jpg" alt="team">
                        <div class="team-member-icon">
                            <div class="display-table">
                                <div class="display-tablecell">
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-info">
                        <a href="#"><h4>Sharon Garcia</h4></a>
                        <p>UX Designer</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section><!-- team section end -->
		<!-- download section start -->

@endsection