@extends('layouts.master')

@section('content')
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
             <img width="240px" height="210px" src="{{$film->getPicture()}}" alt="">
         </div>
         <div class="col-md-8 profile-text">
             <h6>{{  $film->judul_film  }}</h6>
             <table>
             <tr><td>Kode film</td>  
             <td>:</td>  
             <td>{{$film->kode_film}}</td></tr>
             
             <tr>
             <td>Genre</td>
             <td> :</td>
             <td>{{$film->genre_film}}</td>
             </tr>
             <tr>
             <td>Negara</td>
             <td> :</td>
             <td> {{$film->negara}}</td>
             </tr>
             <tr>
             <td>Tahun </td>
             <td>:</td>
             <td> {{$film->tahun}}</td>
             </tr>
             <td>Status </td>
             <td>:</td>
             <td> {{$film->status}}</td>
             </tr>
             <td>Harga</td>
             <td>:</td>
             {{-- <td> {{$film->harga}}</td> --}}
             <td>{{$film->harga}} / Hari</td>
             </table>
         </div>
         <div class="clearfix"></div>
         </div>
         <div class="profile-bottom-bottom">
         {{-- <div class="col-md-4 profile-fo">
             <h4>23,5k</h4>
             <p>Followers</p>
         </div>
         <div class="col-md-4 profile-fo">
             <h4>348</h4>
             <p>Following</p>

         </div>
         <div class="col-md-4 profile-fo">
             <h4>23,5k</h4>
             <p>Snippets</p>

         </div> --}}

         <div class="col-md-2 profile-btn">
            <a type="button" href="/film" class="btn btn-success">Save changes</a>
        </div>
        <div class="col-md-8 profile-btn">
            <a type="button" href="/film/{{$film->id}}/edit" class="btn btn-warning">Edit data</a>
        </div>
         <div class="clearfix"></div>
         </div>
        
          
         
     </div>
 </div>
@endsection