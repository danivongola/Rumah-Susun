@extends('home.index')

@section('content')
<br>
<br>

<div class="row">
   <div class="col-lg-12">
       @if(Sentry::getUser()->hasAccess('admin'))
       <h1>Selamat Datang, {{$user->detailuser->nama}}</h1>
       <div class="row">
           <div class="col-lg-3">
               <a href="{{ URL::to('daftartunggu') }}"><button type="button" class="btn btn-primary btn-lg" style="padding: 35px">
                   <i class="fa fa-taxi fa-5x"></i><br>
                   Daftar Tunggu
               </button></a>
               <hr>
               <a href="{{URL::to('keluhan')}}"><button type="button" class="btn btn-default btn-lg" style="padding: 35px">
                       <i class="fa fa-envelope fa-5x"></i><br>
                       Keluhan
                   </button></a>
               </div>
           <div class="col-lg-3">
               <a href="{{ URL::to('penjadwalan') }}"><button type="button" class="btn btn-success btn-lg" style="padding: 35px">
                   <i class="fa fa-calendar fa-5x"></i><br>
                   Penjadwalan
               </button></a>
               <hr>
               <a href="{{URL::to('penghuni')}}"><button type="button" class="btn btn-danger btn-lg" style="padding: 35px">
                       <i class="fa fa-book fa-5x"></i><br>
                       Perpanjangan sewa
                   </button></a>
           </div>
           <div class="col-lg-3">
               <a href="{{ URL::to('penghuni') }}"><button type="button" class="btn btn-warning btn-lg" style="padding: 35px">
                   <i class="fa fa-user fa-5x"></i><br>
                   Informasi Penghuni
               </button></a>
               <hr>
               <a href="{{ URL::to('kamarkosong') }}"><button type="button" class="btn btn-info btn-lg" style="padding: 35px">
                       <i class="fa fa-rocket fa-5x"></i><br>
                       Kamar Kosong
                   </button></a>
           </div>
           <div class="col-lg-3">
               <a href="{{URL::to('biaya')}}"><button type="button" class="btn btn-default btn-lg" style="padding: 35px">
                   <i class="fa fa-dollar fa-5x"></i><br>
                   Biaya
               </button></a>


           </div>
       </div>

            @elseif(Sentry::getUser()->hasAccess('calonpenghuni'))

       <h1>Selamat Datang, {{$user->detailuser->nama}}</h1>

       <div class="row">
           <div class="col-lg-3">
               <a href="{{ URL::to('daftartunggu') }}"><button type="button" class="btn btn-primary btn-lg" style="padding: 35px">
                       <i class="fa fa-taxi fa-5x"></i><br>
                       Daftar Tunggu
                   </button></a>
               <hr>
               <a href="{{ URL::to('penjadwalan') }}"><button type="button" class="btn btn-success btn-lg" style="padding: 35px">
                       <i class="fa fa-calendar fa-5x"></i><br>
                       Penjadwalan
                   </button></a>
               </div>
           <div class="col-lg-3">
               <a href="{{ URL::to('kamarkosong') }}"><button type="button" class="btn btn-info btn-lg" style="padding: 35px">
                       <i class="fa fa-rocket fa-5x"></i><br>
                       Calon Penghuni Lulus Seleksi
                   </button></a>
               <hr>
           <a href="{{ URL::to('kamarkosong') }}"><button type="button" class="btn btn-danger btn-lg" style="padding: 35px">
                   <i class="fa fa-envelope-o fa-5x"></i><br>
                   Kamar Kosong
               </button></a>
       </div>
           </div>

               @else


       <h1>Selamat Datang, {{$user->detailuser->nama}}</h1>

       @if(!$kamar->biaya == null)
           <div class="col-lg-3">
               <a href="{{URL::to('biaya/'.$kamar->biaya->id)}}"><button type="button" class="btn btn-default btn-lg" style="padding: 35px">
                       <i class="fa fa-dollar fa-5x"></i><br>
                       Biaya
                   </button></a>
               </div>
       @endif
               <div class="col-lg-3">
               <a href="{{URL::to('keluhan')}}"><button type="button" class="btn btn-warning btn-lg" style="padding: 35px">
                       <i class="fa fa-envelope fa-5x"></i><br>
                       Keluhan
                   </button></a>
           </div>
       @endif








    </div>



</div>
    <div class="form-group">


    </div>
    <div class="form-group">


    </div>
    <div class="form-group">


    </div>
    <div class="form-group">


    </div>
</form>

@stop