<?php $__env->startSection('title','Beli Pulsa Murah Disini Aja :D'); ?>

<?php $__env->startSection('body'); ?>

<div class="container tambah_bawah">
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Testimoni</li>
</ol>
<div class="row mt-5">


    <table class="table table-striped table-sm table-hover text-center">
        <thead>
          <tr class="bg-info text-center">
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Komentar</th>
            <th scope="col">Tanggal</th>

          </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $join; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class="text-center">
            <th scope="row"><?php echo e($j->no_telpon); ?></th>
            <th scope="row"><?php echo e($j->komentar); ?></th>
            <th scope="row"><?php echo e($j->created_at); ?></th>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>
      <?php echo e($join->links()); ?>

</div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views/pelanggan/pages/hal_testimoni.blade.php ENDPATH**/ ?>