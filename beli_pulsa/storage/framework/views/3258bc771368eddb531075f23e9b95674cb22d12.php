<?php $__env->startSection('title','Masuk Akun Pelanggan'); ?>

<?php $__env->startSection('body'); ?>


<div class="row justify-content-center">
    <div class="col-lg-5 mb-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-3">Ubah kata sandi anda<br></h3>
                <h5 class="text-center font-weight-light my-2"><?php echo e($email); ?></h4>
            
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
                    <form action="<?php echo e(url('/proses_lupa_password')); ?>" method="POST" style="margin-bottom: 10px;">
                        <?php echo csrf_field(); ?>
                        <input type="password"  name="password" value="" placeholder="Masukkan kata sandi baru" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass">
                        <input type="password"  name="password_confirmation" value="" placeholder="Ulangi kata sandi baru" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass2">
                        <div style="text-align: center; margin-top: 20px;" >
                            <button type="submit" class="btn btn-secondary" id="submit">Ubah Password</button>
                        </div>
                    </form>                   
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/isi_ulang_password.blade.php ENDPATH**/ ?>