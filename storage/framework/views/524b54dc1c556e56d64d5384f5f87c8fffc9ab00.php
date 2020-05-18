<?php $__env->startSection('content'); ?>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="blank">
    <div class="grid-form">
        <div class="grid-form1">
        <h3 id="forms-example" class="">EDIT DATA TRANSAKSI</h3>
        <form action="/transaction/<?php echo e($transaction->id); ?>/update" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
     <div class="form-group">
           <label for="exampleInputEmail1">NAMA PENYEWA</label>
       <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Judul film" value="<?php echo e($transaction->nama); ?>">
         </div>
         <div class="form-group">
         <label for="exampleInputEmail1">EMAIL</label>
         <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo e($transaction->email); ?>">
           </div>
         <div class="form-group">
           <label for="exampleInputEmail1">NO HANDPHONE</label>
       <input type="number" class="form-control" name="no_telp" id="exampleInputPassword1" placeholder="Genre" value="<?php echo e($transaction->no_telp); ?>">
         </div>
       <div class="form-group">
            <label for="exampleInputEmail1">KODE FILM</label>
        <input type="text" class="form-control" name="kode_film" id="exampleInputEmail1" placeholder="Negara" value="<?php echo e($transaction->kode_film); ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">TANGGAL PINJAM</label>
        <input type="date" class="form-control" name="tgl_pinjam" id="exampleInputEmail1" placeholder="Tahun" value="<?php echo e($transaction->tgl_pinjam); ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">TANGGAL KEMBALI</label>
        <input type="date" class="form-control" name="tgl_kembali" id="exampleInputEmail1" placeholder="Tahun" value="<?php echo e($transaction->tgl_kembali); ?>">
          </div>
         
         <button type="submit" class="btn btn-warning">Update</button>
         <a href="/film" class="btn btn-danger">Cancel</a>
        </div>
       </form>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sifilm\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>