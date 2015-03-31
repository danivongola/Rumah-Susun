@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('url'=>'penjadwalan','class'=>'form-horizontal'))}}
<div class="form-group">
    {{ Form::label('id_kamar', 'No Kamar', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('id_kamar',null, array('class'=> 'form-control','placeholder'=>'Masukkan ID Registrasi ')) }}
        {{ $errors->first('id_kamar') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('nama', 'Nama Penghuni', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nama',null, array('class'=> 'form-control','placeholder'=>'Masukkan nama')) }}
        {{ $errors->first('nama') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('tanggal_masuk', 'Tanggal Masuk', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('tanggal_masuk',null, array('class'=> 'form-control','placeholder'=>'Masukkan Tanggal Masuk')) }}
        {{ $errors->first('tanggal_masuk') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('tanggal_keluar', 'Tanggal Keluar', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('tanggal_keluar',null, array('class'=> 'form-control','placeholder'=>'Masukkan Tanggal Keluar')) }}
        {{ $errors->first('tanggal_keluar') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('status', 'Status', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('status',null, array('class'=> 'form-control','placeholder'=>'Masukkan Alamat')) }}
        {{ $errors->first('status') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('lama_perpanjangan', 'Lama Perpanjangan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('lama_perpanjangan',null, array('class'=> 'form-control','placeholder'=>'Masukkan Lama Perpanjangan')) }}
        {{ $errors->first('lama_perpanjangan') }}
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