<?php $__env->startSection('title','Edit Password Akun Pelanggan'); ?>

<?php $__env->startSection('body'); ?>
<div class="container tambah_bawah">
<h1 class="mt-4">Hai, <?php echo e($ids->username); ?></h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/Profil">Profil</a></li>
    <li class="breadcrumb-item">Edit Password</li>
</ol>

<?php if(!Session::get('nama')): ?>
        <?php
            Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
            header("Location: " . URL::to('/Login/create'), true, 302);
            exit();
        ?>
    
    <?php endif; ?>


<?php if(Session::has('password_salah')): ?>
    <div class="alert alert-danger" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo e(session::get('password_salah')); ?></em></div>
<?php endif; ?>

<?php if($errors->all()): ?>
        <div class="alert alert-danger" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 10dp;"><span class="glyphicon glyphicon-ok"></span>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($message); ?>

            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
<?php endif; ?>

<form action="<?php echo e(url('/Pengaturan/Update/Pwd/'.$ids->id_user)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>


<table class="table table-striped table-bordered animated heartBeat delay-1s" style="margin-top: 50px;">
    <thead>
        <tr>
            <th colspan="2">

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <a href="/Pengaturan/<?php echo e($ids->id_user); ?>" class="btn btn-secondary">Edit Profile</a>
                      <a href="#" class="btn btn-secondary active">Edit Password</a>
                      <a href="<?php echo e(url('/Pengaturan/Pin/'.$ids->id_user)); ?>" class="btn btn-secondary">Edit Pin</a>
                </div>

            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col">Password saat ini</th>
        <td scope="col"><input type="password" name="pwd" class="form-control input-lg"></td>
    </tr>

    <tr>
        <th scope="row">Password baru</th>
        <td><input type="password" name="pwd_baru" class="form-control input-lg"></td>
    </tr>

    <tr>
        <th scope="row">Masukkan kembali password baru</th>
        <td><input type="password" name="pwd_cek" class="form-control input-lg"></td>
    </tr>

    <tr>
        <td></td>
        <td><input class="btn btn-primary" value="Simpan" type="submit"></td>
    </tr>
    </tbody>
  </table>
</form>

</div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/password_edit.blade.php ENDPATH**/ ?>