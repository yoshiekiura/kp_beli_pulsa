<?php $__env->startSection('title','Masuk Akun Pelanggan'); ?>

<?php $__env->startSection('body'); ?>

<div class="container tambah_bawah">
<div class="row justify-content-center">
    <div class="col-lg-5 animated bounceInDown delay-0s mb-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Masuk Akun Pelanggan</h3>
            </div>
            <div class="card-body">
                        <?php if(Session::has('Sukses')): ?>
                        <div class="alert alert-success" style="text-align: center;margin-top:10px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Sukses'); ?></em></div>
                        <?php endif; ?>
                        <?php if(Session::has('Kesalahan')): ?>
                        <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Kesalahan'); ?></em></div>
                        <?php endif; ?>

                        <?php if(Session::has('CobaPaksa')): ?>
                                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('CobaPaksa'); ?></em></div>
                        <?php endif; ?>

                        <?php if(Session::has('Logout')): ?>
                                    <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Logout'); ?></em></div>
                        <?php endif; ?>

                        <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger" style="padding-bottom: 0px;">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        </div>
                    <?php endif; ?>
                <form action="<?php echo e(url('/Login')); ?>" method="POST" style="margin-bottom: 10px;">
                    <?php echo csrf_field(); ?>
                    <input type="text"  name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="password"  name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <div style="text-align: center; margin-top: 20px;" >
                        <button type="submit" class="btn btn-secondary" id="submit">Masuk</button>
                    </div>
                </form>
                <th colspan="2">
                    <a href="#" style="float: right;" data-toggle="modal" data-target="#lupaPassword"><i class="far fa-question-circle"
                    style="height: auto; width: 30px; margin-left:40px"></i><p>Lupa Password ?</p></a>
                </th>

            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lupaPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lupa password akun anda ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo e(url('/Lupa_password')); ?>" method="post">
            <?php echo method_field('post'); ?>
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="hapus">Silakan masukkan email pada isian dibawah !</label>
                    <input id="hapus" type="text" placeholder="Masukkan Email Anda" name="email" class="form-control input-sm mt-4">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/login_pelanggan.blade.php ENDPATH**/ ?>