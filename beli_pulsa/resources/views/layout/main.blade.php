<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link rel="stylesheet" href="/my/mystyle.css">
    <link rel="stylesheet" href="/my/footernew.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="/js/jquery.min.js"></script> --}}
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/popper.js"></script>
    <script type="text/css" src="/css/csslogin.css"></script>

    {{-- KUTAMBAH KARENA GABISA NGEDROPDOWN --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <!-- <link rel="stylesheet" type="text/css" href="/css/csslogin.css"> -->



    <title>@yield('title')</title>

</head>
<style>

    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus{
    color: white;
    }

    .navbar-brand{
    font-size: 30px;
    margin-right: 30px;
    }

    .nav-link{
    font-size: 18px;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
    }

    .kiri {
      float: left;
      width: 50%;
    }

    #kanan {
      float: right;
      width: 50%;
    }



</style>



<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top" style="padding: 0px;">
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">TUKU PULSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Harga') }}"><i class="fas fa-clipboard-list"></i> Daftar Harga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-cart-plus"></i> Status Transaksi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Testimoni') }}" ><i class="fas fa-comment-dollar"></i> Testimoni</a>
            </li>
          </ul>
            @if(Session::get('nama'))
              <ul class="navbar-nav float-right" >
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle"></i> {{Session::get('nama')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/Profil">Profil</a>
                      <a class="dropdown-item" href="/Riwayat">Riwayat Transaksi</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/Logout">LOGOUT!</a>
                    </div>
                </li>
              </ul>
            @else
              <ul class="navbar-nav float-right">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/Login/create') }}" ><i class="fas fa-sign-in-alt"></i> Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Register/create') }}" ><i class="fas fa-user-plus"></i> Mendaftar</a>
                  </li>
              </ul>
            @endif
        </div>
        </div>
    </nav>

        @yield('body')

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
          <small>Copyright &copy; CV. Mitra Informatika <?= date('Y') ?></small>
        </div>
      </footer>

    {{-- <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9  col-md-2 col-sm-4 col-xs-6">
                        <h3><a href="https://mitrainformatika.net/">CV. Mitra Informatika </a></h3>
                        <ul>
                            <li>Projek Magang :</li>
                            <li class="mt-1"> <a href="https://www.instagram.com/ilysistqma/">1461700047 - Muh. Ilyas Istiqama. M </a> </li>
                            <li> <a href="https://www.instagram.com/rendycahya_/">1461700008 - Rendy Cahya Edytya </a> </li>

                        </ul>
                    </div>

                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Hubungi Kami : </h3>
                        <ul class="social">
                            <li><a href="https://mitrainformatika.net/" target="_blank"><i class="fas fa-address-card"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://g.page/cv--mitra-informatika?share" target="_blank"><i class="fas fa-map-marked-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.footer-->
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left mt-4">Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>

            </div>
        </div>
        <!--/.footer-bottom-->
    </footer> --}}



</body>
</html>
