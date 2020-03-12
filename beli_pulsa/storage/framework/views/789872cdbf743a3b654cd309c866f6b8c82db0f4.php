<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <link rel="stylesheet" type="text/css" href="/css/background.css">
    <link rel="stylesheet" href="/my/mystyle.css">
    <link rel="stylesheet" href="/my/footernew.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" type="text/css" href="/css/csslogin.css"> -->
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    
    
    
    
    
    <script type="text/css" src="/css/csslogin.css"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/sbadmin4/src/assets/demo/datatables-demo.js"></script>
    

    <title><?php echo $__env->yieldContent('title'); ?></title>

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

    .ukuran{
      /* font-size: 15px; */
      text-align: justify;
    }



</style>



<body style="background-color:#F0F1F3; margin-top:50px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success navbar fixed-top" style="padding: 0px;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">TUKU PULSA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <!-- ...... -->
            </ul>
            <?php if(Session::get('nama')): ?>
              <ul class="navbar-nav float-right" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user-circle"></i> <?php echo e(Session::get('nama')); ?>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/Profil">Profil</a>
                      <a class="dropdown-item" href="/Riwayat">Riwayat Transaksi</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/Logout">Log Out</a>
                    </div>
                </li>
              </ul>
            <?php else: ?>
              <ul class="navbar-nav float-right">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/Login')); ?>" ><i class="fas fa-sign-in-alt"></i> Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/Daftar')); ?>" ><i class="fas fa-user-plus"></i> Mendaftar</a>
                  </li>
              </ul>
            <?php endif; ?>

          </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar" style="padding: 0px;">
      <div class="container">
        <!-- <a class="navbar-brand" href="<?php echo e(url('/')); ?>">BERANDA</a> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/')); ?>"><i class="fa fa-home" aria-hidden="true"></i>
 Beranda</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/Harga')); ?>"><i class="fas fa-clipboard-list"></i> Daftar Harga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/')); ?>"><i class="fas fa-cart-plus"></i> Status Transaksi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/Testimoni')); ?>" ><i class="fas fa-comment-dollar"></i> Testimoni</a>
            </li>
          </ul>
            </div>
          </div>
    </nav>
    <div class="container">
        <?php echo $__env->yieldContent('body'); ?>
    </div>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; CV. Mitra Informatika <?= date('Y') ?></small>
        </div>
      </footer>



</body>
</html>
<?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views/layout/tampilan_pelanggan.blade.php ENDPATH**/ ?>