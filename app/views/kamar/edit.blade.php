@extends('home.index')

@section('content')
<br>
<br>
{{ Form::model($kamar, array('route' => array('kamar.update', $kamar->id), 'method' => 'PUT')) }}
<div class="form-group">
    {{ Form::label('id_kamar', 'No Kamar', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('id_kamar', null, array('class'=> 'form-control','placeholder'=>'Masukkan Nomor Kamar')) }}
        {{ $errors->first('id_kamar') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('id_lantai', 'No Lantai', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('id_lantai',null, array('class'=> 'form-control','placeholder'=>'Masukkan No Lantai')) }}
        {{ $errors->first('id_lantai') }}
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