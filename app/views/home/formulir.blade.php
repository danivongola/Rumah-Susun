@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('url'=>'formulir/'. $user->id,'class'=>'form-horizontal'))}}
<div class="form-group">
    @if (Session::get('message'))
    {(Session::get('message') )}
    @endif
</div>
<div class="form-group">
    {{ Form::label('nama', 'Nama', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nama', null, array('class'=> 'form-control','placeholder'=>'Masukkan Nama')) }}
        {{ $errors->first('nama') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('nik', 'Nomor Induk Kependudukan (NIK)', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('nik', null, array('class'=> 'form-control','placeholder'=>'Masukkan NIK')) }}
        {{ $errors->first('nik') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('alamat', 'Alamat', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('alamat', null, array('class'=> 'form-control','placeholder'=>'Masukkan Alamat')) }}
        {{ $errors->first('alamat') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('no_telepon', 'No Telepon', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('no_telepon', null, array('class'=> 'form-control','placeholder'=>'Masukkan Nomor_telepon')) }}
        {{ $errors->first('no_telepon') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('pekerjaan', 'Pekerjaan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('pekerjaan', null, array('class'=> 'form-control','placeholder'=>'Masukkan pekerjaan')) }}
        {{ $errors->first('pekerjaan') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('gaji_bulanan', 'Gaji Bulanan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('gaji_bulanan', null, array('class'=> 'form-control','placeholder'=>'Masukkan Gaji Bulanan')) }}
        {{ $errors->first('gaji_bulanan') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('jumlah_keluarga', 'Jumlah Keluarga', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('jumlah_keluarga', null, array('class'=> 'form-control','placeholder'=>'Masukkan Jumlah Keluarga')) }}
        {{ $errors->first('jumlah_keluarga') }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
</div>
</form>

@stop