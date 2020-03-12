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
                    <h1 class="mt-4">Daftar Komplain Tuku Pulsa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Komplain</li>
                        </ol>
                        
                    <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Id Transaksi</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Nomor Telepon</th>
                              <th scope="col">Pesan</th>
                              <th scope="col">Tanggal Komplain</th>
                              <th scope="col">Sudah Dilakukan</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <th scope="row"><?php echo e($loop->iteration); ?></th>
                              <td><?php echo e($item->id_transaksi); ?></td>
                              <td><?php echo e($item->nama); ?></td>
                              <td><?php echo e($item->no_telpon); ?></td>
                              <td><?php echo e($item->pesan); ?></td>
                              <td><?php echo e($item->created_at); ?></td>
                              <td class="text-center"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                          </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>

                    </div>
                    </div>
                </main>

    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views/admin/pages/daftar_komplain.blade.php ENDPATH**/ ?>