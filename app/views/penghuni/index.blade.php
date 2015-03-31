@extends('home.index')

@section('content')
<br>
<br>

<h1>All the Penghuni</h1>
<a href="{{ URL::to('penghuni/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Nama Penghuni</td>
        <td>No Kamar</td>
        <td>No Lantai</td>
        <td>Tanggal Masuk</td>
        <td>Tanggal Keluar</td>
        <td>Jumlah Keluarga</td>
        <td>Status Penghuni</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($penghuni->users as $key => $value)
    <tr>
        <td>{{ $value->detailuser->nama }}</td>
        <td>{{ $value->kamar->no_kamar }}</td>
        <td>{{ $value->kamar->lantai }}</td>
        <td>{{ $value->detailuser->tanggal_masuk }}</td>
        <td>{{ $value->detailuser->tanggal_keluar }}</td>
        <td>{{ $value->detailuser->jumlah_keluarga }}</td>
        <td>{{ $value->detailuser->status }}</td>
        <td style="width:150px;">{{ Form::open(array('url' => 'penghuni/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('penghuni/' . $value->id . '/edit') }}">Edit </a>
            <a class="pull-right btn btn-info" href="{{ URL::to('perpanjangan/' . $value->id . '/edit') }}">Perpanjangan </a>
        </td>
    </tr>
    @endforeach


    </tbody>

</table>
<br>
<br>


@stop