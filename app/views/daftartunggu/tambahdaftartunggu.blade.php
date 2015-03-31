@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('url'=>'daftartunggu','class'=>'form-horizontal'))}}
<div class="form-group">
    {{ Form::label('nama', 'Nama Calon Penghuni', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nama',null, array('class'=> 'form-control','placeholder'=>'Masukkan Nama Calon Penghuni')) }}
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
    {{ Form::label('alamat', 'Alamat', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('alamat',null, array('class'=> 'form-control','placeholder'=>'Masukkan Alamat')) }}
        {{ $errors->first('alamat') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('no_telepon', 'no_telepon', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('no_telepon',null, array('class'=> 'form-control','placeholder'=>'Masukkan Nomor Telepon')) }}
        {{ $errors->first('no_telepon') }}
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