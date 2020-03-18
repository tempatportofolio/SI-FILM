@extends('layouts.master')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="blank">
    <div class="grid-form">
        <div class="grid-form1">
        <h3 id="forms-example" class="">EDIT DATA TRANSAKSI</h3>
        <form action="/transaction/{{$transaction->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
     <div class="form-group">
           <label for="exampleInputEmail1">NAMA PENYEWA</label>
       <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Judul film" value="{{$transaction->nama}}">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">NO HANDPHONE</label>
       <input type="number" class="form-control" name="no_telp" id="exampleInputPassword1" placeholder="Genre" value="{{$transaction->no_telp}}">
         </div>
    
         <div class="form-group">
            <label for="exampleInputEmail1">KODE FILM</label>
        <input type="text" class="form-control" name="kode_film" id="exampleInputEmail1" placeholder="Negara" value="{{$transaction->kode_film}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">TANGGAL PINJAM</label>
        <input type="date" class="form-control" name="tgl_pinjam" id="exampleInputEmail1" placeholder="Tahun" value="{{$transaction->tgl_pinjam}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">TANGGAL KEMBALI</label>
        <input type="date" class="form-control" name="tgl_kembali" id="exampleInputEmail1" placeholder="Tahun" value="{{$transaction->tgl_kembali}}">
          </div>
         
         <button type="submit" class="btn btn-warning">Update</button>
         <a href="/film" class="btn btn-danger">Cancel</a>
        </div>
       </form>
    </div>
    </div>
    </div>
@endsection