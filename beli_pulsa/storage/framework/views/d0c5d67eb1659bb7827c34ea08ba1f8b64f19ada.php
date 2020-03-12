<?php $__env->startSection('title','Profil Saya'); ?>

<?php $__env->startSection('body'); ?>
<div class="container tambah_bawah">

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Profil</li>
</ol>

<?php if(Session::has('Sukses')): ?>
        <div class="alert alert-success" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 25px;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo e(session::get('Sukses')); ?></em></div>
    <?php endif; ?>
    <?php if(Session::has('Verifed')): ?>
    <div class="alert alert-success" style="text-align: center; margin-top:25px; margin-left: 35px; border-radius: 25px; margin-right: 35px; border-radius: 25px; margin-bottom: 25px;"><span class="glyphicon glyphicon-ok"></span><em> <?php echo e(session::get('Verifed')); ?></em></div>
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


    <?php if(!Session::get('nama')): ?>
        <?php
            header("Location: " . URL::to('/Login/cobapaksa'));
            exit();
        ?>
    <?php endif; ?>

    <div class="card animated bounceInLeft delay-0s">
        <div class="card-header">
            <h4 class="card-title text-center mt-2">Hai, <?php echo e($panggil->username); ?></h5>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->nama); ?></label>
                    </div>
              </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->username); ?></label>
                    </div>
              </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->email); ?></label>
                    </div>
              </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->jenis_kelamin); ?></label>
                    </div>
              </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->alamat); ?></label>
                    </div>
              </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->no_telpon); ?></label>
                    </div>
              </div>
              <?php if( $panggil->status_akun == "Belum Terverifikasi"): ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status Akun</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->status_akun); ?></label>
                        <a style="vertical-align: text-bottom;" href="/SendEmail"><span style="margin-left: 50px; padding:5px" class="badge badge-primary">Kirim Verifikasi Email</span></a>
                    </div>
              </div>
              <?php elseif( $panggil->status_akun == "Terverifikasi"): ?>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status Akun</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->status_akun); ?></label>
                    </div>
              </div>
              <?php endif; ?>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Saldo</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: Rp. <?php echo number_format(0, 0, ',', '.'); ?></label>
                    </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Total Transaksi</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: Rp. <?php echo number_format(0, 0, ',', '.'); ?></label>
                    </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Mendaftar</label>
                    <div class="col-sm-10">
                        <label class="col-form-label">: <?php echo e($panggil->tanggal_mendaftar); ?></label>
                    </div>
              </div>

        </div>
        <div class="card-footer text-muted">
            <a style="float: left" href="/Pengaturan/<?php echo e($panggil->id_user); ?>"><i style=" margin-left:20px" class="fas fa-cogs"></i> <p>Edit Akun</p></a>
            <a href="#" style="float: right;" data-toggle="modal" data-target="#hapusAkun"><i class="fas fa-trash-alt" style=" margin-left:30px"></i><p>Hapus Akun</p></a>
        </div>
      </div>

      <div class="mt-5"></div>

<!-- Modal -->
<div class="modal fade" id="hapusAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Akun ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo e(url('/Pengaturan/hapus/'.$panggil->id_user)); ?>" method="post">
            <?php echo method_field('delete'); ?>
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="hapus">Jika anda yakin menghapus akun anda, Masukkan password pada isian dibawah !</label>
                    <input id="hapus" type="password" placeholder="Masukkan Password Anda" name="password" class="form-control input-sm mt-4">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/pages/profil.blade.php ENDPATH**/ ?>