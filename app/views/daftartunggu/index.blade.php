@extends('home.index')

@section('content')
<br>
<br>
<h1>Daftar Tunggu Calon Penghuni</h1>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Nama Calon Penghuni</td>
        <td>NIK</td>
        <td>Alamat</td>
        <td>No Telepon</td>
    </tr>
    </thead>
    <tbody>
    @foreach($daftartunggu->users as $value)
    <tr>
        <td>{{ $value->detailuser->nama }}</td>
        <td>{{ $value->detailuser->nik }}</td>
        <td>{{ $value->detailuser->alamat }}</td>
        <td>{{ $value->detailuser->no_telepon }}</td>
        @if($value->isAdmin())
     <td><a class=" btn btn-info" href="{{ URL::to('daftartunggu/' . $value->id . '/edit') }}">Edit </a>
            <a class="pull-right" style="width:60px;">{{ Form::open(array('url' => 'daftartunggu/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
        @endif

        </td>

    </tr>
    @endforeach
    </tbody>
</table>
@stop