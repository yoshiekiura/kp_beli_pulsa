<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lte/plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/lte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="assets/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/lte/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/lte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/lte/plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">



</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark bg-navy">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <a class="nav-link" href="/logout">
                <i class="fas fa-sign-out-alt"></i>
            </a>

        </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/dashboard" class="brand-link" style="background:#000529">
            <img src="/assets/img/favicon.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8;">
            <span class="brand-text font-weight-bold">TUKUPULSA.COM</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/assets/lte/dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/dashboard" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/daftar-harga" class="nav-link">
                        <i class="ion ion-bag"></i>
                        <p>Daftar Harga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/daftar-bank" class="nav-link">
                        <i class="fas fa-university"></i>
                        <p>Daftar Bank</p>
                    </a>
                </li>
                <li class="nav-header">Transaksi</li>
                <li class="nav-item">
                    <a href="/transaksi-pembelian" class="nav-link">
                        <i class="fas fa-cash-register"></i>
                        <p>Transaksi Pembelian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan-bulanan" class="nav-link">
                        <i class="fas fa-book"></i>
                        <p>Laporan Bulanan</p>
                    </a>
                </li>
                <li class="nav-header">Pelanggan</li>
                <li class="nav-item">
                    <a href="/daftar-pelanggan" class="nav-link">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Daftar Pelanggan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/komplain" class="nav-link">
                        <i class="fas fa-thumbtack"></i>
                        <p>Komplain</p>
                    </a>
                </li>



            </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('header')</h1>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

    @yield('content')

            </div>
        </section>
    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>CV. Mitra Informatika</b>
        </div>
        {{-- <strong>Copyright &copy; 2014-2019 <b>AdminLTE.io</b>.</strong> All rights reserved. --}}
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    </footer>
    </div>
    <!-- Control Sidebar -->
    {{-- <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside> --}}
    <!-- /.control-sidebar -->

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
 <!-- jQuery -->
 <script src="/assets/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/lte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/assets/lte/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/assets/lte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/lte/plugins/raphael/raphael.min.js"></script>
<script src="/assets/lte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/lte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/assets/lte/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/assets/lte/dist/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="/assets/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
    });
    $(function () {
        $("#example2").DataTable();
    });
    $(function () {
        $("#example3").DataTable();
    });
</script>

</body>
</html>
