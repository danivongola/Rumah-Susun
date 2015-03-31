@extends('home.index')

@section('content')
<br xmlns="http://www.w3.org/1999/html">


<br>
{{ Form::open(array('url'=>'login','class'=>'form-horizontal'))}}
<div class="form-group">
@if (Session::get('message'))
{(Session::get('message') )}
@endif
</div>
    <div class="form-group">
        <!--<label for="inputUsername3" class="col-sm-2 control-label">Username</label>-->
        {{ Form::label('email', 'Email', array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
            <!--<input type="inputusername" class="form-control" id="inputUsername3" placeholder="username">-->
        {{ Form::text('email', null, array('class'=> 'form-control','placeholder'=>'Masukkan Email')) }}
        {{ $errors->first('email') }}
          </div>
      </div>
      <div class="form-group">
          {{ Form::label('password', 'Password', array('class'=>'col-sm-2 control-label'))}}
          <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
           <div class="col-sm-4">
               {{ Form::password('password', array('class'=> 'form-control','placeholder'=>'Masukkan Password')) }}
               {{ $errors->first('password') }}
               <!--  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">-->
           </div>
       </div>
       <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
               <div class="checkbox">
                   <label>
                       <input name="remember" value=1 type="checkbox"> Remember me
                   </label>
               </div>
           </div>
       </div>
       <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
               <!--  <button type="submit" class="btn btn-primary">Sign in</button>-->
               {{ Form::submit('Sign in', array('class'=> 'btn btn-primary'))}}
            </div>
        </div>
    {{Form::close() }}

    @stop