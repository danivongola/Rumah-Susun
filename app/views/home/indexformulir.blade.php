@extends('home.index')

@section('content')
<br>
<br>
<h1>All the Penghuni</h1>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Nama</td>
        <td>NIK</td>
        <td>Nomor Telepon</td>
        <td>Pekerjaan</td>
        <td>Gaji Bulanan</td>
        <td>Tanggal Masuk</td>
        <td>Tanggal Keluar</td>
        <td>Status</td>
        <td>Jumlah Keluarga</td>
        <td>Action</td>
    </tr>
    </tr>
    </thead>
    <tbody>
    @foreach($calonpenghuni as $key => $value)
    <tr>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->nik }}</td>
        <td>{{ $value->no_telepon }}</td>
        <td>{{ $value->pekerjaan }}</td>
        <td>{{ $value->gaji_bulanan}}</td>
        <td>{{ $value->tanggal_masuk}}</td>
        <td>{{ $value->status }}</td>
        <td>{{ $value->jumlah_keluarga}}</td>>
        <td style="width:150px;">{{ Form::open(array('url' => 'calonpenghuni/' . $value->user->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('calonpenghuni/' . $value->user->id . '/edit') }}">Edit </a>
        </td>
    </tr>
    @endforeach
    </tbody>

</table>
<br>
<br>


@stop