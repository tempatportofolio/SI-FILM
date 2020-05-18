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
            @foreach ($trans as $trans)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$trans->nama}}</td>
                <td>{{$trans->no_telp}}</td>
                <td>{{$trans->kode_film}}</td>
                <td>{{$trans->tgl_pinjam}}</td>
                <td>{{$trans->tgl_kembali}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
 
</body>
</html>