<?php $__env->startSection('title','Beli Pulsa Murah Disini Aja :D'); ?>

<?php $__env->startSection('body'); ?>

<div id="pageone">
    <section class="section">
          <div class="container mt-5 animated bounceInDown delay-0s">
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger alarm mt-3 animated jackInTheBox delay-2s">
                    <h3 class="text-center">Kesalahan Pengisian</h3>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </div>
            <?php endif; ?>

            

            <div class="row no-gutters bg-light position-relative rounded-left rounded-right turuninDikit shadow-lg p-3 mb-4 bg-white rounded">
                <div class="col-md-6 mb-md-0 p-md-4">
                  <img src="/image/image1.jpg" class="w-100" alt="picture">
                </div>
                <div class="col-md-6 position-static p-4 pl-md-0">
                    <div class="text-dark text-center">
                        <h6 class="font-weight-bold animated bounceInDown delay-1s mt-5 mb-3">Mau pulsa murah tapi nggak ribet ?</h6>
                        <h3 class="font-weight-bold animated zoomIn delay-1s">PESAN DISINI AJA</h3>
                        <h5 class="font-weight-bold animated zoomIn delay-1s">TUKUPULSA.COM</h5>
                        <h6 class="font-weight-bold animated bounceInUp delay-1s mt-3 mb-5">Ada untuk Anda.</h6>
                        <a type="button" class="btn btn-info animated jackInTheBox delay-2s mt-5" id="beli" href="#pilih-paket">BELI SEKARANG</a>
                    </div>
                </div>
              </div>
          </div>

          <div class="row text-center animated bounceInUp delay-3s">
              <div class="col-lg">
                  <p class="font-weight-bold">DAFTAR UNTUK JADI ANGGOTA TUKUPULSA.COM</p>
                  <a href="/Daftar" class="btn btn-warning font-weight-bold mr-3">DAFTAR SEKARANG <i class="fas fa-user-plus"></i></a>
                  <a href="/Login" class="btn btn-success font-weight-bold">LOGIN <i class="fas fa-sign-in-alt"></i></a>
              </div>
          </div>
        </section>
        </div>

        <div class="separator">
            <h3>Pilih Paket</h3>
        </div>

<div id="pilih-paket">
    <section class="section">
        <div class="container container-responsive turuninDikit">
            <div class="row  animated fadeInUp delay-0s">
                <div class="col mb-3">
                    <div class="card shadow-lg border-1 rounded-lg">
                        <form action="/beli" method="post">
                        <h2 class="text-center mt-4 mb-4"><span class="badge badge-pill badge-dark">PULSA REGULER</span></h2>

                        <div class="form-group form-group-ukuran">
                            <select name="pulsa_op" id="pulsa_op" class="browser-default custom-select dynamic1" data-dependent="pulsa_nominal" required>
                                <option selected disabled value="">-- Pilih Operator --</option>
                                <?php $__currentLoopData = $produk_pulsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($p->pulsa_op); ?>"><?php echo e($p->pulsa_op); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                    <div class="form-group form-group-ukuran">
                        <select name="pulsa_nominal" id="keterangan1" class="browser-default custom-select opsi-pulsa" required>
                            <option value="" selected>-- Pilih Nama Produk --</option>
                        </select>
                    </div>
                    <?php echo csrf_field(); ?>
                    <div class="form-group form-group-ukuran">
                        <input type="text" class="form-control" id="masaaktif1" placeholder="Masa Aktif" disabled>
                    </div>
                    <?php if(Session::get('nama')): ?>
                    <div class="form-group form-group-ukuran">
                    <input type="number" name="nomor" class="form-control" placeholder="Nomor HP" value="<?php echo e($nomor[0]->no_telpon); ?>" readonly required>
                    </div>
                    <?php else: ?>
                        <div class="form-group form-group-ukuran">
                            <input type="number" name="nomor" class="form-control" placeholder="-- Nomor HP --" required>
                        </div>
                    <?php endif; ?>
                    <div class="form-group form-group-ukuran">
                        <select name="bank" class="browser-default custom-select" required>
                            <option selected disabled>-- Pilih Pembayaran --</option>
                            <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($b->id); ?>"><?php echo e($b->bank); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group form-group-ukuran">
                        <h2 class="harga hr1">RP -</h2>
                        <input type="hidden" name="harga" id="hr1" readonly>
                        <input type="hidden" name="kode"  id="kode1" readonly>

                    </div>
                    <div class="form-group form-group-ukuran">
                        <button type="submit" class="btn btn-outline-primary btn-pesan">PESAN SEKARANG</button>
                    </div>
                    </form>
                </div>
            </div>

                <div class="col">
                    <div class="card shadow-lg border-1 rounded-lg">
                        <h2 class="text-center mt-4 mb-4"><span class="badge badge-pill badge-dark">PAKET INTERNET</span></h2>
                        <form action="/beli" method="post">
                            <div class="form-group form-group-ukuran">
                                <select name="pulsa_op" id="pulsa_op" class="browser-default custom-select dynamic2" data-dependent="pulsa_nominal" required>
                                    <option value="">-- Pilih Operator --</option>
                                    <?php $__currentLoopData = $produk_internet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p->pulsa_op); ?>"><?php echo e($p->pulsa_op); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <select name="pulsa_nominal" id="keterangan2" class="browser-default custom-select opsi-paket" required>
                                <option value="" selected>-- Pilih Nama Produk --</option>
                                </select>
                            </div>
                            <?php echo csrf_field(); ?>
                            <div class="form-group form-group-ukuran">
                                <input type="text" class="form-control" id="masaaktif2" placeholder="Masa Aktif" disabled>
                            </div>
                            <?php if(Session::get('nama')): ?>
                                <div class="form-group form-group-ukuran">
                                    <input type="number" name="nomor" class="form-control" placeholder="-- Nomor HP --" value="<?php echo e($nomor[0]->no_telpon); ?>" readonly required>
                                </div>
                            <?php else: ?>
                                <div class="form-group form-group-ukuran">
                                    <input type="number" name="nomor" class="form-control" placeholder="-- Nomor HP --" required>
                                </div>
                            <?php endif; ?>
                            <div class="form-group form-group-ukuran">
                                <select name="bank" class="browser-default custom-select" required>
                                    <option selected disabled>-- Pilih Pembayaran --</option>
                                    <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($b->id); ?>"><?php echo e($b->bank); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group form-group-ukuran">
                                <h2 class="harga hr2" name="harga">RP -</h2>

                                <input type="hidden" name="harga" id="hr2" readonly>
                                <input type="hidden" name="kode"  id="kode2" readonly>


                            </div>
                            <div class="form-group form-group-ukuran">
                                <button type="submit" class="btn btn-outline-primary btn-pesan">PESAN SEKARANG</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>


<div class="backTop"><i class="fas fa-chevron-up"></i></div>

<script>
    $(document).ready(function(){

        $('#beli').click(function(){
            $('.card').addClass(' animated fadeInUp delay-1s');
        });

        $('.dynamic1').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '<?php echo e(url("dynamicdependent/cari")); ?>',
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('.opsi-pulsa').html(result);
                    }
                })
            }
        });

        $('.dynamic2').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '<?php echo e(url("dynamicdependent/cari")); ?>',
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('.opsi-paket').html(result);
                    }
                })
            }
        });

        $('#keterangan1').change(function(){
            var provider = $('.dynamic1').val();
            var ket = $(this).val();
            var _token = $('input[name="_token"]').val();
            //console.log(ket);

            $.ajax({
                url: '<?php echo e(url("dynamicdependent/bawaKodeHarga")); ?>',
                method: 'POST',
                data:{keterangan:ket, _token:_token},
                dataType: "JSON",
                success:function(data){
                    //console.log(data);

                    $('.hr1').html("RP. "+ data.pulsa_price);
                    $('#hr1').val(data.pulsa_price);
                    $('#masaaktif1').val("+ " +data.masaaktif + " Hari");
                    $('#kode1').val(data.pulsa_code);
                    // $('#produk1').val(data.pulsa_op);
                    // $('#ket1').val(data.pulsa_nominal);
                }
            });
        });

        $('#keterangan2').change(function(){
            var provider = $('.dynamic2').val();
            var ket = $(this).val();
            var _token = $('input[name="_token"]').val();
            //console.log(ket);

            $.ajax({
                url: '<?php echo e(url("dynamicdependent/bawaKodeHarga")); ?>',
                method: 'POST',
                data:{keterangan:ket, _token:_token},
                dataType: "JSON",
                success:function(data){
                    //console.log(data);

                    $('.hr2').html("RP. "+ data.pulsa_price);
                    $('#hr2').val(data.pulsa_price);
                    $('#kode2').val(data.pulsa_code);
                    $('#masaaktif2').val(data.masaaktif + " Hari");
                    // $('#produk2').val(data.pulsa_op);
                    // $('#ket2').val(data.pulsa_nominal);
                }
            });
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        var $backToTop = $(".backTop");
        $backToTop.hide();
        $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $backToTop.fadeIn();
        } else {
            $backToTop.fadeOut();
        }
        });

        $backToTop.on('click', function(e) {
        $("html, body").animate({scrollTop: 0}, 500);
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\kp_beli_pulsa\beli_pulsa\resources\views//pelanggan/pages/beranda.blade.php ENDPATH**/ ?>