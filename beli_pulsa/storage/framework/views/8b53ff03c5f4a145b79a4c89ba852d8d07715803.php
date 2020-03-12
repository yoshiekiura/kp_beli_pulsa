<?php $__env->startSection('title','Komplain'); ?>

<?php $__env->startSection('body'); ?>
<h1 class="mt-4">Beri Komplain</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item">Komplain</li>
    </ol>
    <form action="Komplain/Kirim" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="komplain">Komplain</label>
          <input type="text" class="form-control" name="id_transaksi" id="komplain" value="666" readonly>
        </div>
        <div class="form-group">
          <label for="Nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="Nama">
        </div>
        <div class="form-group">
          <label for="tlp">No. Telepon</label>
          <input type="number" class="form-control" name="telp" id="tlp" aria-describedby="tlp">
          <small id="tlp" class="form-text text-muted">Masukan nomor HP sesuai yang ada di data transaksi yang anda komplain</small>
        </div>
        
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea type="text" class="form-control" name="pesan" id="pesan"><?php echo e($pesan); ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mb-5">Kirim</button>
      </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/tampilan_pelanggan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/komplain.blade.php ENDPATH**/ ?>