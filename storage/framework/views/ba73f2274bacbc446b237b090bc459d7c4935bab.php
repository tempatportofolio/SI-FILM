<nav class="navbar-default navbar-static-top" role="navigation">
<div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
   </button>
  <h1> <a class="navbar-brand" href="/film">SI FILM</a></h1>         
</div>
<div class=" border-bottom">
<div class="full-left">
<section class="full-top">
<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
</section>
<form class=" navbar-left-right" method="GET" action="/film">
 <input name="cari" type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
 <input type="submit" value="" class="fa fa-search">
</form>
<div class="clearfix"> </div>
</div>


<!-- Brand and toggle get grouped for better mobile display -->

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="drop-men" >
 <ul class=" nav_1">
    
  <li class="dropdown">
       <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo e(auth()->user()->name); ?></span><img src="<?php echo e(asset('admin/images/naa.jpg')); ?>"></a>
     </li>
    
 </ul>
</div><!-- /.navbar-collapse -->
<div class="clearfix">
</div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\sifilm\resources\views/layouts/includes/_navbar.blade.php ENDPATH**/ ?>