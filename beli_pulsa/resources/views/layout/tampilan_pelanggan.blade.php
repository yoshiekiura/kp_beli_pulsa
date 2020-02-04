<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/background.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" type="text/css" href="/css/csslogin.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>



    <title>@yield('title')</title>

</head>
<style>

    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus{
    color: white;
    }

    .navbar-brand{
    font-size: 30px;
    }

    .nav-link{
    font-size: 20px;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
    }

    /* .navbar-nav{
    margin-right: 150px;
    } */


</style>



<body style="background-color:#F0F1F3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success navbar fixed-top" style="padding: 0px;">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">TUKU PULSA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <!-- ...... -->
            </ul>
            @if(Session::get('nama'))
              <ul class="navbar-nav float-right" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Session::get('nama')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/Login/index">Home</a>
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
                  <a class="nav-link" href="{{ url('/Login/create') }}" >Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Register/create') }}" >Mendaftar</a>
                  </li>
              </ul>
            @endif

          </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar" style="padding: 0px;">
      <div class="container">
        <!-- <a class="navbar-brand" href="{{ url('/') }}">BERANDA</a> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Beranda</a>
              </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Daftar Harga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/Harga')}}">Lihat Semua Lur !!!</a>
                <a class="dropdown-item" href="{{url('/Harga/pulsaReguler')}}">Pulsa Reguler</a>
                <a class="dropdown-item" href="{{ url('/Harga/paketInternet') }}">Paket Internet</a>
              </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Harga') }}">Daftar Harga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Status Transaksi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Testimoni') }}" >Testimoni</a>
            </li>
          </ul>
            </div>
          </div>
    </nav>
    <div class="container">
        @yield('body')
    </div>

    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9  col-md-2 col-sm-4 col-xs-6">
                        <h3><a href="https://mitrainformatika.net/" target="_blank">CV. Mitra Informatika </a></h3>
                        <ul>
                            <li>Projek Magang :</li>
                            <li class="mt-1"> <a href="https://www.instagram.com/ilysistqma/" target="_blank">1461700047 - Muh. Ilyas Istiqama. M </a> </li>
                            <li> <a href="https://www.instagram.com/rendycahya_/" target="_blank">1461700008 - Rendy Cahya Edytya </a> </li>

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
    </footer>


    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/js/popper.js"></script>
    <script type="text/css" src="/css/csslogin.css"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/sbadmin4/src/assets/demo/datatables-demo.js"></script>
</body>
</html>
