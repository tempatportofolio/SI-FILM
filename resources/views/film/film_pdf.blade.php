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
          @foreach ($film as $film)
          <tr>
            <td>{{ $loop->iteration }}</td>
              <td>{{$film->kode_film}}</td>
              <td>{{$film->judul_film}}</td>
              <td>{{$film->genre_film}}</td>
              <td>{{$film->negara}}</td>
              <td>{{$film->tahun}}</td>
              <td>{{$film->harga}}</td>
              <td>{{$film->status}}</td>
          </tr>
          <?php $number++; ?>
          @endforeach
        </tbody>
      </table>
 
</body>
</html>