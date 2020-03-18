@extends('layouts.master')
@section('content')

<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">
<!--banner-->	
<div class="banner">
            <h1>DATA FILM</h1>                  
</div>
  <div class="blank">
    <div class="blank-page">
   <div class="right">
    <button style="background" type="button" class="btn btn-info text-sub btn-lg" data-toggle="modal" data-target="#exampleModal">Tambah Film</button>
   </div>
	<table class="table table-hover">
        <thead>
          <tr>
            <th>KODE</th>
            <th>JUDUL FILM</th>
            <th>GENRE</th>
            <th>NEGARA</th>
            <th>TAHUN</th>
            <th>HARGA</th>
            <th>STATUS</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $film)
            <tr>
                <td>{{$film->kode_film}}</td>
                <td>{{$film->judul_film}}</td>
                <td>{{$film->genre_film}}</td>
                <td>{{$film->negara}}</td>
                <td>{{$film->tahun}}</td>
                <td>{{$film->harga}}</td>
                <td>{{$film->status}}</td>
                <td>
                <a href="/film/{{$film->id}}/detail" class="btn btn-success btn-sm">Detail</a>
                <a href="/film/{{$film->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/film/{{$film->id}}/destroy" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
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
            <form action="/film/create" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">KODE FILM</label>
                  <input name="kode_film" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kode film">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">JUDUL FILM</label>
                    <input name="judul_film" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul film">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">GENRE</label>
                    <input name="genre_film" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="genre">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NEGARA</label>
                    <input name="negara" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Negara">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">TAHUN</label>
                    <input name="tahun" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tahun">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">HARGA</label>
                    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">STATUS</label>
                    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="status">
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

@endsection
