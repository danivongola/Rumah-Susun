@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('route'=>'penjadwalan.store','class'=>'form-horizontal'))}}
<div class="form-group">
    {{ Form::label('emil', 'Email', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('email',null, array('class'=> 'form-control','placeholder'=>'Masukkan Email Calon Penghuni')) }}
        {{ $errors->first('email') }}
    </div>
</div>
<div class="form-group">
    <label for="dtp_input2" class="col-md-2 control-label" name="tanggal_keluhan">Tanggal</label>
    <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_keluhan">
        {{ Form::text('tanggal_wawancara', null, array('class'=> 'form-control', 'size'=> 16,))}}
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
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