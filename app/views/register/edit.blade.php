@extends('home.index')

@section('content')
<br>
<br>
{{ Form::model($register, array('route' => array('register.update', $register->id), 'method' => 'PUT')) }}
div class="form-group">
<div class="form-group">
    {{ Form::label('', 'ID Calon Penghuni', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('id_calonpenghuni',null, array('class'=> 'form-control','placeholder'=>'Masukkan ID Calon Penghuni')) }}
        {{ $errors->first('id_calonpenghuni') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('tanggal_registrasi', 'Tanggal Registrasi', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('tanggal_registrasi',null, array('class'=> 'form-control','placeholder'=>'Masukkan Tanggal Registrasi')) }}
        {{ $errors->first('tanggal_registrasi') }}
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
        {{ Form::text('status',null, array('class'=> 'form-control','placeholder'=>'Masukkan Status')) }}
        {{ $errors->first('status') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('id_keluarga', 'Alasan Perpanjangan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('id_keluarga',null, array('class'=> 'form-control','placeholder'=>'Masukkan ID Keluarga')) }}
        {{ $errors->first('id_keluarga') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('nama', 'Nama', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nama',null, array('class'=> 'form-control','placeholder'=>'Masukkan Nama')) }}
        {{ $errors->first('nama') }}
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