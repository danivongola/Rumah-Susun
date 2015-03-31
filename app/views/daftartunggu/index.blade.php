@extends('home.index')

@section('content')
<br>
<br>
<h1>Daftar Tunggu Calon Penghuni</h1>

<a href="{{ URL::to('daftartunggu/create') }}"><button type="submit" class="btn btn-primary">Tambah</button></a>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Nama Calon Penghuni</td>
        <td>NIK</td>
        <td>Alamat</td>
        <td>No Telepon</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($daftartunggu as $value)
    <tr>
        <td>{{ $value->groups }}</td>
        <td>{{ $value->detailuser->nik }}</td>
        <td>{{ $value->detailuser->alamat }}</td>
        <td>{{ $value->detailuser->no_telepon }}</td>
     <td><a class=" btn btn-info" href="{{ URL::to('daftartunggu/' . $value->id . '/edit') }}">Edit </a>
            <a class="pull-right" style="width:60px;">{{ Form::open(array('url' => 'listrik/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}

        </td>

    </tr>
    @endforeach
    </tbody>
</table>
@stop