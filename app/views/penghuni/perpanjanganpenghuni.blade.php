@extends('home.index')

@section('content')
<br>
<br>
{{ Form::model($user, array('route' => array('perpanjangan.update', $user->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}
<div class="form-group">
    <label for="dtp_input2" class="col-md-2 control-label" name="tanggal_keluhan">Tanggal Masuk</label>
    <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_keluhan">
        {{ Form::text('tanggal_masuk', $user->detailuser->tanggal_masuk, array('class'=> 'form-control', 'size'=> 16,))}}
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
    </div>
    <div class="form-group">
        <label for="dtp_input2" class="col-md-2 control-label" name="tanggal_keluhan">Tanggal Keluar</label>
        <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" name="tanggal_keluhan">
            {{ Form::text('tanggal_keluar', $user->detailuser->tanggal_keluar, array('class'=> 'form-control', 'size'=> 16,))}}
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
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