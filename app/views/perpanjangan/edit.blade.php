@extends('home.index')

@section('content')
<br>
<br>
{{ Form::model($user->detailuser, array('route' => array('perpanjangan.update', $user->id), 'method' => 'PUT')) }}
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