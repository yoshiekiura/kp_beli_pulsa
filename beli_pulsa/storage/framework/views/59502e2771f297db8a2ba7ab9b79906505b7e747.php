<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2>Hai <?php echo e($nama); ?></h2><br>
<p>Terimakasih anda telah bergabung dengan tukupulsa.com.<br><br>
    Tinggal satu langkah lagi untuk mengaktifkan akun anda. Silahkan klik link di bawah ini untuk mengkonfirmasikan akun anda :
</p><br>
<button type="button" class="btn btn-success"><a href="<?php echo e(url('/coba')); ?>?email='<?php echo e($email); ?>'&kode='<?php echo e($kode); ?>'">Verifikasi Akun!</a></button>
<p><a href="<?php echo e(url('/coba')); ?>?email='<?php echo e($email); ?>'&kode='<?php echo e($kode); ?>'"><?php echo e(url('/coba')); ?>?email='<?php echo e($email); ?>'&kode='<?php echo e($kode); ?>'</a></p>
<p><a href="<?php echo e(url('/coba')); ?>?email='<?php echo e($email); ?>'&kode='<?php echo e($kode); ?>'">LINK SKUY</a></p>
<br><br><p>Demikian kami sampaikan.
    <br><br>Salam Hangat <br><br>Tukupulsa.com
</p><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views/isiemail.blade.php ENDPATH**/ ?>