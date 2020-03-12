<?php $__env->startSection('title','Daftar Pelanggan'); ?>

<?php $__env->startSection('body'); ?>
<div class="container tambah_bawah">
<div class="row justify-content-center animated bounceInDown delay-0s">
    <div class="col-lg-5 mb-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">DAFTAR PELANGGAN</h3>

            </div>
            <div class="card-body">
                <?php if(Session::has('Kesalahan')): ?>
                <div class="alert alert-danger" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('Kesalahan'); ?></em></div>
                <?php endif; ?>
                <?php if(Session::has('Berhasil')): ?>
                        <div class="alert alert-success" style="text-align: center;margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo e(session::get('Berhasil')); ?></em></div>
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
                <form action="<?php echo e(url('/Register')); ?>" method="POST" style="margin-bottom: 10px;">
                    <?php echo csrf_field(); ?>
                    <input type="text"  name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="number"  name="no_telpon" value="<?php echo e(old('no_telpon')); ?>" placeholder="Nomor HP" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="text"  name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" class="form-control input-lg"  style="margin-bottom: 10px;">
                    <input type="password"  name="password" value="" placeholder="Kata Sandi" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass">
                    <input type="password"  name="password_confirmation" value="" placeholder="Konfirmasi Kata Sandi" class="form-control input-lg"  style="margin-bottom: 10px;" id="pass2">
                    <div style="text-align: center; margin-top: 20px;" >
                        <button type="submit" class="btn btn-secondary" id="submit">Mendaftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






    


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/daftar_pelanggan.blade.php ENDPATH**/ ?>