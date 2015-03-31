@extends('home.index')

@section('content')
<br>
<br>
{{ Form::model($daftartunggu, array('route' => array('daftartunggu.update', $daftartunggu->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}
    <div class="form-group">
        {{ Form::label('nama', 'Nama', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('nama', $daftartunggu->detailuser->nama, array('class'=> 'form-control','placeholder'=>'Masukkan Nama')) }}
            {{ $errors->first('nama') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('nik', 'Nomor Induk Kependudukan (NIK)', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('nik',$daftartunggu->detailuser->nik, array('class'=> 'form-control','placeholder'=>'Masukkan NIK')) }}
            {{ $errors->first('nik') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('alamat', 'Alamat', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('alamat', $daftartunggu->detailuser->alamat, array('class'=> 'form-control')) }}
            {{ $errors->first('alamat') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('no_telepon', 'Nomor Telepon', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('no_telepon', $daftartunggu->detailuser->no_telepon, array('class'=> 'form-control')) }}
            {{ $errors->first('no_telepon') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan', 'Pekerjaan', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('pekerjaan', $daftartunggu->detailuser->pekerjaan, array('class'=> 'form-control','placeholder'=>'Masukkan Gaji Bulanan')) }}
            {{ $errors->first('pekerjaan') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('gaji_bulanan', 'Gaji Bulanan', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('gaji_bulanan', $daftartunggu->detailuser->gaji_bulanan, array('class'=> 'form-control','placeholder'=>'Masukkan Status')) }}
            {{ $errors->first('gaji_bulanan') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('jumlah_keluarga', 'Jumlah Keluarga', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('jumlah_keluarga', $daftartunggu->detailuser->jumlah_keluarga, array('class'=> 'form-control','placeholder'=>'Masukkan Jumlah Keluarga')) }}
            {{ $errors->first('jumlah_keluarga') }}
        </div>
    </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <!--  <button type="submit" class="btn btn-primary">Sign in</button>-->
        {{ Form::submit('Simpan', array('class'=> 'btn btn-primary'))}}
    </div>
</div>
{{Form::close() }}

@stop