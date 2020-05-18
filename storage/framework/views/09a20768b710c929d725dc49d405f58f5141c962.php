<?php $__env->startSection('content'); ?>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">

  <!--banner-->	
         <div class="banner">
             <h2>
             <a href="index.html">Home</a>
             <i class="fa fa-angle-right"></i>
             <span>Detail Film</span>
             </h2>
         </div>
     <!--//banner-->
   <!--gallery-->
   <div class=" profile">

     <div class="profile-bottom">
         <h3><i class="fas fa-video"></i>Detail film</h3>
         <div class="profile-bottom-top">
         <div class="col-md-4 profile-bottom-img">
             <img width="240px" height="210px" src="<?php echo e($film->getPicture()); ?>" alt="">
         </div>
         <div class="col-md-8 profile-text">
             <h6><?php echo e($film->judul_film); ?></h6>
             <table>
             <tr><td>Kode film</td>  
             <td>:</td>  
             <td><?php echo e($film->kode_film); ?></td></tr>
             
             <tr>
             <td>Genre</td>
             <td> :</td>
             <td><?php echo e($film->genre_film); ?></td>
             </tr>
             <tr>
             <td>Negara</td>
             <td> :</td>
             <td> <?php echo e($film->negara); ?></td>
             </tr>
             <tr>
             <td>Tahun </td>
             <td>:</td>
             <td> <?php echo e($film->tahun); ?></td>
             </tr>
             <td>Status </td>
             <td>:</td>
             <td> <?php echo e($film->status); ?></td>
             </tr>
             <td>Harga</td>
             <td>:</td>
             
             <td><?php echo e($film->harga); ?> / Hari</td>
             </table>
         </div>
         <div class="clearfix"></div>
         </div>
         <div class="profile-bottom-bottom">
         

         <div class="col-md-2 profile-btn">
            <a type="button" href="/film" class="btn btn-success">Save changes</a>
        </div>
        <div class="col-md-8 profile-btn">
            <a type="button" href="/film/<?php echo e($film->id); ?>/edit" class="btn btn-warning">Edit data</a>
        </div>
         <div class="clearfix"></div>
         </div>
        
          
         
     </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sifilm\resources\views/film/show.blade.php ENDPATH**/ ?>