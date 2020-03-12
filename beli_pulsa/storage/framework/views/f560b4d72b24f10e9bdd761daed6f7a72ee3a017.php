

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin TUKU PULSA</title>
        <link href="/sbadmin4/dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3>

                                    <?php if(Session::has('Kesalahan')): ?>
                                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 10px; border-radius: 10px; margin-right: 10px; border-radius: 10px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Kesalahan'); ?></em></div>
                                    <?php endif; ?>

                                    <?php if(Session::has('CobaPaksa')): ?>
                                                <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 10px; border-radius: 10px; margin-right: 10px; border-radius: 10px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Kesalahan'); ?></em></div>
                                    <?php endif; ?>

                                    <?php if(Session::has('Logout')): ?>
                                                <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 10px; border-radius: 10px; margin-right: 10px; border-radius: 10px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Logout'); ?></em></div>
                                    <?php endif; ?>

                                    <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                    <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    </div>
                                    <?php endif; ?>

                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo e(url('/Login/Admin')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputUsernameAddress">Username</label>
                                                <input class="form-control py-4" name="username" value="<?php echo e(old('username')); ?>" id="inputUsernameAddress" type="text" placeholder="Enter Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" value="<?php echo e(old('password')); ?>" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary" id="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="/">Tuku Pulsa</a>
                                &middot;
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/sbadmin4/src/js/scripts.js"></script>
    </body>
</html>
<?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views/admin/forms/login_admin.blade.php ENDPATH**/ ?>