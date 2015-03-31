@extends('home.index')

@section('content')
<br>
<br>
<h1>Keluhan</h1>

<a href="{{ URL::to('keluhan/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>


<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>No Kamar</td>
        <td>Nama Penghuni</td>
        <td>Keluhan</td>
        <td>Status Keluhan</td>
        <td>Tanggal Keluhan</td>
    </tr>
    </thead>
    <tbody>
    @foreach($keluhan as $key => $value)
    <tr>
        <td>{{ $value->user->kamar->no_kamar}}</td>
        <td>{{ $value->user->detailuser->nama }}</td>
        <td>{{ $value->keluhan }}</td>
        <td>{{ $value->status_keluhan}}</td>
        <td>{{ $value->tanggal_keluhan }}</td>
        @if($value->user->isAdmin())
        <td style="width:150px;">{{ Form::open(array('url' => 'keluhan/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
        </td>
        @endif
    </tr>
    @endforeach
    </tbody>

</table>
<br>
<br>


@stop