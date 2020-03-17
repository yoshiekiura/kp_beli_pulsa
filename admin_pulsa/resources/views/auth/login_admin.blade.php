<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TUKUPULSA.COM | Admin Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/lte/plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/assets/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/lte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-navy">
    <div class="login-box">
    <div class="login-logo">
        <img src="/assets/img/favicon.ico" alt="mitra_informatika"><p class="text-orange"><b>Admin</b>TUKUPULSA.COM</p>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body mt-4">
            @if(Session::has('Kesalahan'))
            <p class="login-box-msg">{!! session('Kesalahan') !!}</p>
            @endif
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <p class="login-box-msg">{{ $error }}</p>
            @endforeach
            @endif
        <form action="/postLogin" method="post">
            @csrf
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" minlength="8" name="password" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Konfirmasi Password" minlength="8" name="password_confirmation" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8"></div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-warning btn-block">Sign In</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>

<!-- jQuery -->
<script src="/assets/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/lte/dist/js/adminlte.min.js"></script>

</body>
</html>
