<?php $__env->startSection('content'); ?>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
    <!--banner-->	
    <div class="banner">
                <h1>DATA TRANSAKSI</h1>                  
    </div>
      <div class="blank">
        <div class="blank-page">
       <div class="right">
        <a href="/transaction/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <button style="background" type="button" class="btn btn-info text-sub btn-lg" data-toggle="modal" data-target="#exampleModal">Tambah Transaksi</button>
        <a href="/transaction/cetak_pdf" class="btn btn-danger" target="_blank">CETAK PDF</a>
      </div>
        <table class="table table-hover">
            <thead>
              <tr>
                <th>NAMA PENYEWA</th>
                <th>EMAIL</th>
                <th>NO HANDPHONE</th>
                <th>KODE FILM</th>
                <th>TANGGAL PINJAM</th>
                <th>TANGGAL KEMBALI</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($trans->nama); ?></td>
                    <td><?php echo e($trans->email); ?></td>
                    <td><?php echo e($trans->no_telp); ?></td>
                    <td><?php echo e($trans->kode_film); ?></td>
                    <td><?php echo e($trans->tgl_pinjam); ?></td>
                    <td><?php echo e($trans->tgl_kembali); ?></td>
                    <td>
                    <a href="/transaction/<?php echo e($trans->id); ?>/kirimemail" class="btn btn-success btn-sm">Reminder</a>
                    <a href="/transaction/<?php echo e($trans->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/transaction/<?php echo e($trans->id); ?>/destroy" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
     </div>
    </div> 
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title">TAMBAH FILM</h2>
            </div>
            <div class="modal-body">
                <form action="/transaction/create" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NAMA PENYEWA</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NO HANDPHONE</label>
                        <input name="no_telp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp">
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">KODE FILM</label>
                        <input name="kode_film" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
                      </div>
    
                      <div class="form-group">
                        <label for="exampleInputEmail1">TANGGAL PINJAM</label>
                        <input name="tgl_pinjam" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
    
                      <div class="form-group">
                        <label for="exampleInputEmail1">TANGGAL KEMBALI</label>
                        <input name="tgl_kembali" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      </div>
    
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        
        </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sifilm\resources\views/transaksi/index.blade.php ENDPATH**/ ?>