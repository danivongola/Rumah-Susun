@extends('home.index')

@section('content')
<br>
<br>

<h1>Perpanjangan Penghuni</h1>
<a href="{{ URL::to('perpanjangan/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>No Kamar</td>
        <td>Nama</td>
        <td>Tanggal Masuk</td>
        <td>Tanggal Keluar</td>
        <td>Status</td>
        <td>Lama Perpanjangan</td>
    </tr>
    </thead>
    <tbody>
    @foreach($perpanjangan as $key => $value)
    <tr>
        <td>{{ $value->no_kamar}}</td>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->tanggal_masuk }}</td>
        <td>{{ $value->tanggal_keluar }}</td>
        <td>{{ $value->status }}</td>
        <td style="width:150px;">{{ Form::open(array('url' => 'perpanjangan/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('perpanjangan/' . $value->id . '/edit') }}">Edit </a>
        </td>
    </tr>
    @endforeach


    </tbody>

</table>


@stop