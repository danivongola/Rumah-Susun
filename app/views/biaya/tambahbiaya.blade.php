@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('route'=>'biaya.store','class'=>'form-horizontal'))}}
<div class="form-group">
{{ Form::label('no_kamar', 'No Kamar', array('class'=>'col-sm-2 control-label'))}}
<div class="col-sm-4">
    {{ Form::text('no_kamar', null, array('class'=> 'form-control','placeholder'=>'Masukkan No Kamar')) }}
    {{ $errors->first('no_kamar') }}
</div>
</div>
<div class="form-group">
    {{ Form::label('air', 'Biaya Air', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('air', null, array('class'=> 'form-control','placeholder'=>'Masukkan Biaya Air')) }}
        {{ $errors->first('air') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('listrik', 'Listrik', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('listrik', null, array('class'=> 'form-control','placeholder'=>'Masukkan Biaya Listrik')) }}
        {{ $errors->first('listrik') }}
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