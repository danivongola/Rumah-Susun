@extends('home.index')

@section('content')
<br>
<br>
{{ Form::open(array('url'=>'auths/register','class'=>'form-horizontal'))}}
<div class="form-group">
    @if (Session::get('message'))
    {(Session::get('message') )}
    @endif
</div>
<div class="form-group">
    {{ Form::label('first_name', 'First Name', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('first_name', null, array('class'=> 'form-control','placeholder'=>'Masukkan Firts Name')) }}
        {{ $errors->first('first_name') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('last_name', 'Last Name', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('last_name', null, array('class'=> 'form-control','placeholder'=>'Masukkan Last Name')) }}
        {{ $errors->first('last_name') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('email', 'Email', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::text('email', null, array('class'=> 'form-control','placeholder'=>'Masukkan Email')) }}
        {{ $errors->first('email') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('password', 'Password', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::password('password', null, array('class'=> 'form-control','placeholder'=>'Masukkan Password')) }}
        {{ $errors->first('password') }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('password_confirmation', 'Password Confrimation', array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-4">
        {{ Form::password('password_confirmation', null, array('class'=> 'form-control','placeholder'=>'Masukkan Password')) }}
        {{ $errors->first('password_confrimation') }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
</div>
</form>

@stop