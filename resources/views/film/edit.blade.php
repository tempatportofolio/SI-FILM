
@extends('layouts.master')
@section('content')

<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="blank">
<div class="grid-form">
    <div class="grid-form1">
    <h3 id="forms-example" class="">EDIT DATA FILM</h3>
    <form action="/film/{{$film->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
 <div class="form-group">
       <label for="exampleInputEmail1">JUDUL FILM</label>
   <input type="text" name="judul_film" class="form-control" id="exampleInputEmail1" placeholder="Judul film" value="{{$film->judul_film}}">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">GENRE</label>
   <input type="text" class="form-control" name="genre_film" id="exampleInputPassword1" placeholder="Genre" value="{{$film->genre_film}}">
     </div>

     <div class="form-group">
        <label for="exampleInputEmail1">NEGARA</label>
    <input type="text" class="form-control" name="negara" id="exampleInputEmail1" placeholder="Negara" value="{{$film->negara}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">TAHUN</label>
    <input type="text" class="form-control" name="tahun" id="exampleInputEmail1" placeholder="Tahun" value="{{$film->tahun}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">HARGA</label>
    <input type="text" class="form-control" name="harga" id="exampleInputEmail1" placeholder="Tahun" value="{{$film->harga}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">STATUS</label>
    <input type="text" class="form-control" name="status" id="exampleInputEmail1" placeholder="Status" value="{{$film->status}}">
      </div>
 
      <div class="form-group{{$errors->has('picture') ? ' has-error' : ''}}">
        <label for="exampleInputFile">File input</label>
        <input name="picture" type="file" id="exampleInputFile">
        <p class="help-block">Insert Film Cover</p>
      </div>
      @if($errors->has('picture'))
                      <span class="help-block">{{$errors->first('picture')}}</span>
                  @endif
     
     <button type="submit" class="btn btn-warning">Update</button>
     <a href="/film" class="btn btn-danger">Cancel</a>
    </div>
   </form>
</div>
</div>
</div>
@endsection