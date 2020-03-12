<?php $__env->startSection('title','Admin TUKUPULSA'); ?>

<?php $__env->startSection('body'); ?>

    <?php if(!Session::get('admin')): ?>
        <?php
            Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
            header("Location: " . URL::to('Login/Admin'), true, 302);
            exit();
        ?>
    <?php endif; ?>

    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h1 class="mt-4">Daftar Transaksi Tuku Pulsa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Transaksi</li>
                        </ol>
                        
                    <div class="table-responsive">
                      <form action="/mobilepulsa/pulsa" method="POST">
                      <?php echo csrf_field(); ?>
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Produk</th>
                              <th scope="col">Provider</th>
                              <th scope="col">Voucher</th>
                              <th scope="col">No. Telepon</th>
                              <th scope="col">Pembayaran</th>
                              <th scope="col">Tanggal Pembelian</th>
                              <th scope="col">Status Pembayaran</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <th scope="row"><?php echo e($loop->iteration); ?></th>
                              <td>Paket <?php echo e($item->pulsa_type); ?></td>
                              <input type="hidden" name="pulsa_code" value="<?php echo e($item->pulsa_code); ?>">
                              <td><?php echo e($item->pulsa_op); ?></td>
                              <td><?php echo e($item->pulsa_nominal); ?></td>
                              <input type="hidden" name="no_telpon" value="<?php echo e($item->no_telpon); ?>">
                              <td><?php echo e($item->no_telpon); ?></td>
                              <td><?php echo e($item->bank); ?> ( <?php echo e($item->atas_nama); ?> )</td>
                              <td><?php echo e($item->tanggal_beli); ?></td>
                              <?php if($item->status_transaksi == 0): ?>
                              <td>Menunggu</td>
                              <td><input type="submit" value="Bayar"></td>
                              
                              <?php elseif($item->status_transaksi == 1): ?>
                              <td>Proses</td>
                              <td></td>
                              
                              <?php elseif($item->status_transaksi == 2): ?>
                              <td>Selesai</td>
                              <td></td>
                              <?php endif; ?>
                          </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                          </form>
                        </table>

                    </div>
                    </div>
                </main>

    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views/admin/pages/daftar_transaksi.blade.php ENDPATH**/ ?>