<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">  
<link rel='stylesheet' type='text/css' href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" />
<!-- Custom Theme files -->
<link rel="icon" type="image/png" href="<?php echo e(asset('admin/images/sifilm.png')); ?>"/>
<link rel='stylesheet' type='text/css' href="<?php echo e(asset('admin/css/style.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('admin/css/font-awesome.css')); ?> "/> 
<script type="text/javascript" src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"> </script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"> </script>
<script src="https://kit.fontawesome.com/4bd55c123d.js" crossorigin="anonymous"></script>
  
<!-- Mainly scripts -->
<script type="text/javascript" src="<?php echo e(asset('admin/js/jquery.metisMenu.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/jquery.slimscroll.min.js')); ?>"></script>
<!-- Custom and plugin javascript -->
<link rel='stylesheet' href="<?php echo e(asset('admin/css/custom.css')); ?> "/>
<script type="text/javascript" src="<?php echo e(asset('admin/js/custom.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/screenfull.js')); ?>"></script>
<script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>
</script>
</head>

<body>

<div id="wrapper">
	  
	<!--NAVBAR-->
	<?php echo $__env->make('layouts.includes._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!---------->

	<!--SIDEBAR-->
	<?php echo $__env->make('layouts.includes._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!----------->      
 	<div class="blank">
			
				
	<?php echo $__env->yieldContent('content'); ?>
	        
	</div>
	
	<!--//faq-->
		<!---->
	
		<div class="copy">
			<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>  | Used by : SIFILM(MI) </p>	    </div>  
		 
</div>   
<!---->
<!--scrolling js-->
	<script src="<?php echo e(asset('admin/js/jquery.nicescroll.js')); ?>"></script>
	<script src="<?php echo e(asset('admin/js/scripts.js')); ?>"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
	<!--//scrolling js-->

	<script>
		$(document).ready(function(){
		  $('#datatable').DataTable({
			processing:true,
			serverside:true,
			ajax:"<?php echo e(route('ajax.get.data.film')); ?>",
			columns:[
			  {data:'kode_film', name:'kode_film'},
			  {data:'judul_film', name:'judul_film'},
			  {data:'genre_film', name:'genre_film'},
			  {data:'negara', name:'negara'},
			  {data:'tahun', name:'tahun'},
			  {data:'harga', name:'harga'},
			  {data:'status', name:'status'},
			  {data:'aksi', name:'aksi'},
			]
		  });

		  $('body').on('click','.delete',function(){
			onclick="return confirm('Are you sure?')"
		  });
		});
	  </script>


	
	

</body>
</html>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php /**PATH C:\xampp\htdocs\sifilm\resources\views/layouts/master.blade.php ENDPATH**/ ?>