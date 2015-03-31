@extends('home.index')

@section('content')
<br>
<br>

{{ Form::open(array('url'=>'penghuni', 'class'=>'form-horizontal'))}}
<div class="form-group">
    {{ Form::label('nama', 'Nama Penghuni', array('class'=>'col-sm-2 control-label' ))}}
    <div class="col-sm-4">
        {{ Form::text('nama',null, array('class'=> 'form-control','placeholder'=>'Masukkan Nama Penghuni')) }}
        {{ $errors->first('nama') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('nik', 'Nomor Induk Kependudukan (NIK)', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nik',null, array('class'=> 'form-control','placeholder'=>'Masukkan NIK')) }}
        {{ $errors->first('nik') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('no_telepon', 'No Telepon', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('no_telepon',null, array('class'=> 'form-control','placeholder'=>'Masukkan No Telepon')) }}
        {{ $errors->first('no_telepon') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('pekerjaan', 'Tanggal Registrasi', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('pekerjaan',null, array('class'=> 'form-control','placeholder'=>'Masukkan Pekerjaan')) }}
        {{ $errors->first('pekerjaan') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('gaji_bulanan', 'Tanggal Keluar', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('gaji_bulanan',null, array('class'=> 'form-control','placeholder'=>'Masukkan Tanggal Keluar')) }}
        {{ $errors->first('gaji_bulanan') }}
    </div>
</div>
<div class="form-group">
    <label for="dtp_input2" class="col-md-2 control-label" name="tanggal_keluhan">Tanggal Masuk</label>
    <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_keluhan">
        {{ Form::text('tanggal_masuk', null, array('class'=> 'form-control', 'size'=> 16,))}}
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
</div>
<div class="form-group">
    <label for="dtp_input2" class="col-md-2 control-label" name="tanggal_keluhan">Tanggal Keluar</label>
    <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_keluhan">
        {{ Form::text('tanggal_keluar', null, array('class'=> 'form-control', 'size'=> 16,))}}
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
</div>
<div class="form-group">
    {{ Form::label('jumlah_keluarga', 'Jumlah_Keluarga', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('jumlah_keluarga',null, array('class'=> 'form-control','placeholder'=>'Masukkan Jumlah Keluarga')) }}
        {{ $errors->first('jumlah_keluarga') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('alamat', 'Alamat', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('alamat',null, array('class'=> 'form-control','placeholder'=>'Masukkan Alamat')) }}
        {{ $errors->first('alamat') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('email', 'Email', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('email',null, array('class'=> 'form-control','placeholder'=>'Masukkan Email')) }}
        {{ $errors->first('email') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('password', 'Password', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::password('password',null, array('class'=> 'form-control','placeholder'=>'Masukkan Password')) }}
        {{ $errors->first('password') }}
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