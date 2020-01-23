<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUNTUL</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/ily.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/csslogin.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background:silver">
    <div class="container">
    <div class="card">
        <div class="card-body mt-5 mb-5">

    <h1 class="card-text" style="margin-bottom: 50px;margin-top: 50px; text-align: center;">Login Admin Pulsa</h1>

    <div style="margin-left: 200px; margin-right: 200px;" >

        @if(Session::has('Kesalahan'))
        <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Kesalahan') !!}</em></div>
        @endif

        @if(Session::has('CobaPaksa'))
                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Kesalahan') !!}</em></div>
        @endif

        @if(Session::has('Logout'))
                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('Logout') !!}</em></div>
        @endif

@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

    <form action="{{ url('/Login/Admin') }}" method="POST" style="margin-bottom: 10px;">
            @csrf
            <input type="text"  name="username" value="{{ old('username') }}" placeholder="Username" class="form-control input-lg mb-3"  style="margin-bottom: 10px;">
            <input type="password"  name="password" value="{{ old('password') }}" placeholder="Password" class="form-control input-lg mb-5"  style="margin-bottom: 10px;">
            <div style="text-align: center; margin-top: 20px;" >
                <button type="submit" class="btn btn-secondary mb-5" id="submit">Masuk</button>
            </div>
        </form>

    </div>



</div>
</div>
</div>
<footer>
    <div class="footer mt-5" id="footer">
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
