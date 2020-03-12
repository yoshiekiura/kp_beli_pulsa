<?php $__env->startSection('title','Cek Transaksi'); ?>

<?php $__env->startSection('body'); ?>

<div class="container tambah_bawah">

        <ol class="breadcrumb mb-5 mt-5">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item">Cek Transaksi</li>
        </ol>

        <div class="card">
            <div class="card-header">
              Cek Transaksi
            </div>
            <div class="card-body">
              
              
              

                <form action="/Cek-transaksip" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="number" name="nomor" class="form-control" placeholder="Masukkan Nomor Telepon" aria-label="Masukkan Nomor Telepon" aria-describedby="button-addon">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon">Cek</button>
                    </div>
                    </div>
            
                </form>
                <?php if($data == 'belum_diisi'): ?>
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal Beli</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Lihat</th>
                      </tr>
                    </thead>   
                  </table>
                <?php elseif($data == 'tidak ada'): ?>
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">UHUY</th>
                      <th scope="col">Tanggal Beli</th>
                      <th scope="col">No. Telepon</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                      <th scope="col">Lihat</th>
                    </tr>
                  </thead>   
                </table>
                <?php else: ?>                
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Tanggal Beli</th>
                      <th scope="col">No. Telepon</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                      <th scope="col">Lihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th><?php echo e($loop->iteration); ?></th>
                      <td><?php echo e($d->tanggal_beli); ?></td>
                      <td><?php echo e($d->no_telpon); ?></td>
                      <td>Rp. <?php echo number_format($d->harga_total, 0, ',', '.'); ?></td>
                      <td><?php echo e($d->status_transaksi); ?></td>
                      <td><a href="<?php echo e(url('/Cek-rincian/'.$d->id)); ?>" type="button" class="btn btn-primary">Lihat</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  </tbody>

              </table>


            </div>
            <div class="card-footer text-muted">
              SISIRUIT
            </div>
          </div>
          <div class="mt-5"></div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/forms/cek_transaksi.blade.php ENDPATH**/ ?>