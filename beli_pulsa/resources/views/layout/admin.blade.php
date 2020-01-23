<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/ily.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/csslogin.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/footer2.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



    <title>@yield('title')</title>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">TUKU PULSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Lihat Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lihat Komplain</a>
            </li>
            </ul>
            <ul class="navbar-nav float-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Session::get('nama')}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/Admin/Logout">Logout</a>

              </div>
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
                            <li> <a href="https://mitrainformatika.net/">   <i class=" fa fa-google">   </i> </a> </li>
                            <li> <a href="https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg">   <i class="fa fa-youtube">   </i> </a> </li>
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
</body>
</html>
