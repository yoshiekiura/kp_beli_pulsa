<?php $__env->startSection('title','Beli Pulsa Murah Disini Aja :D'); ?>

<?php $__env->startSection('body'); ?>
<div class="container tambah_bawah">
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Daftar Harga</li>
</ol>
<div class="row mt-3">
    
    <div class="col-12">
        <?php if($judul == "Daftar Harga"): ?>
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="/Harga"><b>Lihat Semua</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/Harga/Pulsa"><b>Pulsa</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/Harga/Data"><b>Data</b></a>
            </li>
          </ul>
          <?php elseif($judul == "Daftar Harga Pulsa"): ?>
          <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
              <a class="nav-link text-dark" href="/Harga"><b>Lihat Semua</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark" href="/Harga/Pulsa"><b>Pulsa</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/Harga/Data"><b>Data</b></a>
            </li>
          </ul>
          <?php elseif($judul == "Daftar Harga Data"): ?>
          <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
              <a class="nav-link text-dark" href="/Harga"><b>Lihat Semua</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/Harga/Pulsa"><b>Pulsa</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark" href="/Harga/Data"><b>Data</b></a>
            </li>
          </ul>
          <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-hover table-light table-sm" id="dataTable">
            <thead class="thead-dark">
              <tr>
              <th colspan="6"><i class="far fa-list-alt"></i>  <?php echo e($judul); ?></th>
              </tr>
              <tr>
                <th scope="col" style="width:100px">Type Produk</th>
                <th scope="col" style="width: 150px">Operator</th>
                <th scope="col" style="width: 350px">Nama Produk</th>
                <th scope="col" style="width: 90px">Masa Aktif</th>
                <th scope="col" style="width: 90px">Harga</th>
                <th scope="col" style="width: 70px">Stok</th>
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $harga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row">Paket <?php echo e($harga->pulsa_type); ?></th>
                        <td><?php echo e($harga->pulsa_op); ?></td>
                        <td><?php echo e($harga->pulsa_nominal); ?></td>
                        <td><?php echo e($harga->masaaktif); ?> Hari</td>
                        <td>Rp. <?php echo number_format($harga->pulsa_price, 0, ',', '.'); ?></td>
                        <td><?php echo e($harga->status); ?></td>
                    </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        </div>
    </div>
</div>
<div class="mb-5"></div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\kp_beli_pulsa\beli_pulsa\resources\views/pelanggan/pages/halaman_produk.blade.php ENDPATH**/ ?>