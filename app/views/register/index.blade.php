@extends('home.index')

@section('content')
<br>
<br>
<h1>All the Penghuni</h1>

<a href="{{ URL::to('register/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>ID Registrasi</td>
        <td>ID Calon Penghuni</td>
        <td>Tanggal Masuk</td>
        <td>TanggalKeluar</td>
        <td>Status</td>
        <td>ID Keluarga</td>
        <td>Nama</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($register as $key => $value)
    <tr>
        <td>{{ $value->id_registrasi }}</td>
        <td>{{ $value->id_calonpenghuni }}</td>
        <td>{{ $value->tanggal_masuk }}</td>
        <td>{{ $value->tanggal_keluar }}</td>
        <td>{{ $value->status }}</td>
        <td>{{ $value->id_keluaraga }}</td>
        <td>{{ $value->nama }}</td>
        <td style="width:150px;">{{ Form::open(array('url' => 'register/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('register/' . $value->id . '/edit') }}">Edit </a>
    </tr>
    @endforeach
    </tbody>

</table>

@stop