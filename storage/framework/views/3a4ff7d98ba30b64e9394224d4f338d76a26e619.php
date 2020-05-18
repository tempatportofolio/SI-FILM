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
		<h5>Laporan PDF Transaksi SI-FILM</h4>
		
	</center>
 
	<table class="table table-hover">
        <thead>
          <tr>
              <th>NO</th>
            <th>NAMA PENYEWA</th>
            <th>NO HANDPHONE</th>
            <th>KODE FILM</th>
            <th>TANGGAL PINJAM</th>
            <th>TANGGAL KEMBALI</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($trans->nama); ?></td>
                <td><?php echo e($trans->no_telp); ?></td>
                <td><?php echo e($trans->kode_film); ?></td>
                <td><?php echo e($trans->tgl_pinjam); ?></td>
                <td><?php echo e($trans->tgl_kembali); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\sifilm\resources\views/transaksi/trans_pdf.blade.php ENDPATH**/ ?>