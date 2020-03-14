<!DOCTYPE HTML>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/icofont.css" media="all" />
		<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/slick.css">

		<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
		<!-- Switcher CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/switcher-style.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" media="all" />
		<!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="/assets/img/favicon.ico" />
        {{-- Punya Data table --}}
        <link rel="stylesheet" type="text/css" href="/assets/css/datatables.min.css"/>
        {{-- untuk beli --}}
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							{{-- <a href="#home"><img src="assets/img/logo.png" alt="logo" /></a> --}}
							<a href="#home"><img src="../assets/img/logomi.png" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link" href="/cek_transaksi">Cek Transaksi</a></li>
                                <li><a class="nav-link" href="#listHarga">Daftar Harga</a></li>
                                <li><a class="nav-link" href="#beli">Beli Sekarang</a></li>
                                <li><a class="nav-link" href="#testimonials">Testimoni</a></li>
                                <li><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                                {{-- <li><a class="appao-btn dropdown" href="/login">Login</a></li> --}}

                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header><!-- header section end -->

        @yield('content')

        <footer class="footer" id="contact">
			<div class="container">
				<div class="row">
                    {{-- <div class="col-lg-6">
						<div class="contact-form">
							<h4>Get in Touch</h4>
							<p class="form-message"></p>
							<form id="contact-form" action="#" method="POST">
				                <input type="text" name="name" placeholder="Enter Your Name">
				                <input type="email" name="email" placeholder="Enter Your Email">
				                <input type="text" name="subject" placeholder="Your Subject">
				                <textarea placeholder="Messege" name="message"></textarea>
				                <button type="submit" name="submit">Send Message</button>
				            </form>
						</div>
                    </div> --}}
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
						<div class="contact-address">
							<h4>CV. Mitra Informatika</h4>
							<p>Ngepung, Punggul, Dlanggu, Mojokerto, East Java 61371</p>
							<ul>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-headphone-alt"></i>
									</div>
									<div class="contact-address-info">
										<a href="callto:#">0897-3333-135</a>
									</div>
								</li>
								{{-- <li>
									<div class="contact-address-icon">
										<i class="icofont icofont-envelope"></i>
									</div>
									<div class="contact-address-info">
										<a href="mailto:#">Jsoftbd87gmail.com</a>
									</div>
								</li> --}}
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-web"></i>
									</div>
									<div class="contact-address-info">
										<a href="https://mitrainformatika.net/" target="__blank">mitrainformatika.net</a>
									</div>
								</li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3"></div>
				</div>
				{{-- <div class="row">
                    <div class="col-lg-12">
						<div class="subscribe-form">
							<form action="#">
								<input type="text" placeholder="Your email address here">
								<button type="submit">Subcribe</button>
							</form>
						</div>
                    </div>
				</div> --}}
				<div class="row">
                    <div class="col-lg-12">
						<div class="copyright-area">
							<ul>
								<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
								<li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
							</ul>
							<p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                {{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Colorlib --}}
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                        </div>
                    </div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<a href="#" class="scrollToTop">
			<i class="icofont icofont-arrow-up"></i>
		</a>

        <!-- jquery main JS -->

		<script src="/assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="/assets/js/jquery.slicknav.min.js"></script>
		<!-- Slick JS -->
		<script src="/assets/js/slick.min.js"></script>
		<!-- owl carousel JS -->
		<script src="/assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter JS -->
		<script src="/assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="/assets/js/waypoints.min.js"></script>
	    <!-- YTPlayer JS -->
	    <script src="/assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- jQuery Easing JS -->
		{{-- <script src="/assets/js/jquery.easing.1.3.js"></script> --}}
		<!-- Gmap JS -->
		{{-- <script src="/assets/js/gmap3.min.js"></script> --}}
        <!-- Google map api -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script> --}}
		<!-- Custom map JS -->
		{{-- <script src="/assets/js/custom-map.js"></script> --}}
		<!-- WOW JS -->
		<script src="/assets/js/wow-1.3.0.min.js"></script>
		<!-- Switcher JS -->
		<script src="/assets/js/switcher.js"></script>
		<!-- main JS -->
        <script src="/assets/js/main.js"></script>
        {{-- punya data table --}}
        <script type="text/javascript" src="/assets/js/datatables.min.js"></script>
        <script>
        $(document).ready( function () {
            $('#daftarHargaSemua').DataTable();
        } );
        $(document).ready( function () {
            $('#daftarHargaPulsa').DataTable();
        } );
        $(document).ready( function () {
            $('#daftarHargaData').DataTable();
        } );
        </script>

	</body>
</html>
