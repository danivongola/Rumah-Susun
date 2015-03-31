@extends('home.index')

@section('content')
<br>
<br>
{{ Form::model($keluhan, array('route' => array('keluhan.update', $keluhan->id), 'method' => 'PUT')) }}
<div class="form-group">
    {{ Form::label('id_kamar', 'Nomor Kamar', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('id_kamar', null, array('class'=> 'form-control','placeholder'=>'Masukkan Nomor Kamar')) }}
        {{ $errors->first('id_kamar') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('keluhan', 'Keluhan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('keluhan',null, array('class'=> 'form-control','placeholder'=>'Masukkan keluhan')) }}
        {{ $errors->first('keluhan') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('status', 'Status Keluhan', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('status',null, array('class'=> 'form-control','placeholder'=>'Masukkan Status Keluhan')) }}
        {{ $errors->first('status') }}
    </div>
</div>
<div class="form-group">
    <label for="dtp_input2" class="col-md-2 control-label" name="tanggal_keluhan">Tanggal</label>
    <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_keluhan">
        {{ Form::text('tanggal_keluhan', null, array('class'=> 'form-control', 'size'=> 16,))}}
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>

{{Form::close() }}

@stop<?php
