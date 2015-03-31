@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('url'=>'calonpenghuni'))}}
<div class="form-group">
    {{ Form::label('nama_calonpenghuni', 'Nama Calon Penghuni', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nama_calonpenghuni',null, array('class'=> 'form-control','placeholder'=>'Masukkan Nama Calon Penghuni')) }}
        {{ $errors->first('nama_calonpenghuni') }}
    </div>
    <div class="form-group">
        {{ Form::label('nik', 'NIK', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('nik',null, array('class'=> 'form-control','placeholder'=>'Masukkan NIK')) }}
            {{ $errors->first('nik') }}
        </div>

    </div>
    <div class="form-group">
        {{ Form::label('alamat', 'Alamat  Calon Penghuni', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('alamat',null, array('class'=> 'form-control','placeholder'=>'Masukkan Calon Alamat Penghuni')) }}
            {{ $errors->first('alamat') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('no_telepon', 'Nomor Telepon', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('no_telepon',null, array('class'=> 'form-control','placeholder'=>'Masukkan Nomor Telepon')) }}
            {{ $errors->first('no_telepon') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('pekerjaan', 'Pekerjaan', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('pekerjaan',null, array('class'=> 'form-control','placeholder'=>'Masukkan Pekerjaan')) }}
            {{ $errors->first('pekerjaan') }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('gaji_bulanan', 'Gaji Bulanan', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('gaji_bulanan',null, array('class'=> 'form-control','placeholder'=>'Masukkan Gaji Bulanan')) }}
            {{ $errors->first('gaji_bulanan') }}
        </div>
    </div>
    @if(Sentry::getUser()->hasAccess('admin'))
    <div class="form-group">
        {{ Form::label('lama_sewa', 'Lama Sewa', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            {{ Form::text('lama_sewa',null, array('class'=> 'form-control','placeholder'=>'Masukkan Lama Sewa')) }}
            {{ $errors->first('lama_sewa') }}
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