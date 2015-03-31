@extends('home.index')

@section('content')
<br>
<br>
<h1>Biaya Bulanan Penghuni</h1>
<a href="{{ URL::to('biaya/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>No Kamar</td>
        <td>Lantai</td>
        <td>Nama Penghuni</td>
        <td>Sewa Air</td>
        <td>Sewa Listrik</td>
        <td>Sewa Kamar</td>
        <td>Jumlah Total Biaya</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($biaya as $key => $value)
    <tr>
        <td>{{ $value->kamar->no_kamar }}</td>
        <td>{{ $value->kamar->lantai }}</td>
        <td>{{ $value->kamar->users->detailuser->nama }}</td>
        <td>{{ $value->air }}</td>
        <td>{{ $value->listrik }}</td>
        <td>{{ $value->kamar->harga_kamar }}</td>
        <td>{{ $value->air+ $value->listrik +$value->kamar->harga_kamar }}</td>
        <td style="width:150px;">{{ Form::open(array('url' => 'biaya/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('biaya/' . $value->id . '/edit') }}">Edit </a>
    </tr>
    @endforeach
    </tbody>

</table>

@stop