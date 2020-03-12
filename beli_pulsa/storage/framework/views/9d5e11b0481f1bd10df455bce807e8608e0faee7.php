<?php $__env->startSection('title','Edit Profil Akun Pelanggan'); ?>

<?php $__env->startSection('body'); ?>
<div class="container tambah_bawah">
<h1 class="mt-4">Hai, <?php echo e($ids->username); ?></h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/Profil">Profil</a></li>
    <li class="breadcrumb-item">Edit Profil</li>
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

<form action="<?php echo e(url('/Pengaturan/Update/'.$ids->id_user)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>


<table class="table table-striped table-bordered animated heartBeat delay-1s" style="margin-top: 50px;">
    <thead>
        <tr>
            <th colspan="2">

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <a href="#" class="btn btn-secondary active">Edit Profile</a>
                      <a href="<?php echo e(url('/Pengaturan/Pwd/'.$ids->id_user)); ?>" class="btn btn-secondary">Edit Password</a>
                      <a href="<?php echo e(url('/Pengaturan/Pin/'.$ids->id_user)); ?>" class="btn btn-secondary">Edit Pin</a>
                </div>

            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col">Nama Lengkap</th>
        <td scope="col"><input type="text" name="nama" class="form-control input-lg" value="<?php echo e($ids->nama); ?>" placeholder="Masukkan nama anda"></td>
    </tr>

    <tr>
        <th scope="row">Jenis Kelamin</th>
        <td>
            <select class="form-control input-lg" name="jenis_kelamin">
            <option value="Laki-Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
        </td>
    </tr>

    <tr>
        <th scope="row">Alamat</th>
        <td><input type="text" name="alamat" class="form-control input-lg" placeholder="Masukkan Alamat Anda" value="<?php echo e($ids->alamat); ?>"></td>
    </tr>


    <tr>
        <th scope="row">Kata Sandi</th>
        <td><input type="password" class="form-control input-lg" name="password"></td>
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

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/profil_edit.blade.php ENDPATH**/ ?>