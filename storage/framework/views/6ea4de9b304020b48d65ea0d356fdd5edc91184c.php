<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF SI-FILM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan PDF SI-FILM</h4>
		
	</center>
 
	<table  class="table table-hover" id="datatable">
        <thead>
          <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>JUDUL FILM</th>
            <th>GENRE</th>
            <th>NEGARA</th>
            <th>TAHUN</th>
            <th>HARGA</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
            <?php $number = 0; ?>
          <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($film->kode_film); ?></td>
              <td><?php echo e($film->judul_film); ?></td>
              <td><?php echo e($film->genre_film); ?></td>
              <td><?php echo e($film->negara); ?></td>
              <td><?php echo e($film->tahun); ?></td>
              <td><?php echo e($film->harga); ?></td>
              <td><?php echo e($film->status); ?></td>
          </tr>
          <?php $number++; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\sifilm\resources\views/film/film_pdf.blade.php ENDPATH**/ ?>