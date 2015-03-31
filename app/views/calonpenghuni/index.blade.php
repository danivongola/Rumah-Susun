@extends('home.index')

@section('content')
<br>
<br>
<h1>Daftar Calon Penghuni</h1>
<a href="{{ URL::to('calonpenghuni/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>


<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nama Calon Penghuni</td>
        <td>NIK</td>
        <td>Alamat Penghuni</td>
        <td>Nomer Telepon</td>
        <td>Pekerjaan</td>
        <td>Gaji Bulanan</td>
        <td>Lama Sewa</td>
        <td>Lokasi Kamar</td>
        <td>action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($calonpenghuni as $key => $value)
    <tr>
        <td>{{ $value->id_calonpenghuni }}</td>
        <td>{{ $value->nama_calonpenghuni }}</td>
        <td>{{ $value->nik }}</td>
        <td>{{ $value->alamat }}</td>
        <td>{{ $value->no_telepon }}</td>
        <td>{{ $value->pekerjaan }}</td>
        <td>{{ $value->gaji_bulanan }}</td>
        <td>{{ $value->lama_sewa }}</td>
        <td style="width:150px;">{{ Form::open(array('url' => 'calonpenghuni/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('calonpenghuni/' . $value->id . '/edit') }}">Edit </a>
        </td>
    </tr>
    @endforeach
    </tbody>

</table>




@stop