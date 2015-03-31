@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('route'=>'keluhan.store','class'=>'form-horizontal'))}}
<div class="form-group">
    {{ Form::label('keluhan', 'Keluhan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::textarea('keluhan',null, array('class'=> 'form-control','placeholder'=>'Masukkan keluhan')) }}
        {{ $errors->first('keluhan') }}
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