@extends('home.index')

@section('content')
<br>
<br>

<h1>Jadwal Wawancara Calon Penghuni</h1>
@if($penjadwalan->first()->user->isAdmin())
<a href="{{ URL::to('penjadwalan/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>
@endif

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Nama Calon Penghuni</td>
        <td>NIK</td>
        <td>Alamat</td>
        <td>No Telepon</td>
        <td>Tanggal Wawancara</td>
    </tr>
    </thead>
    <tbody>
    @foreach($penjadwalan as $key => $value)
    <tr>
        <td>{{ $value->user->detailuser->nama}}</td>
        <td>{{ $value->user->detailuser->nik }}</td>
        <td>{{ $value->user->detailuser->alamat }}</td>
        <td>{{ $value->user->detailuser->no_telepon}}</td>
        <td>{{ $value->tanggal_wawancara }}</td>
        @if($value->user->isAdmin())
        <td style="width:150px;">{{ Form::open(array('url' => 'penjadwalan/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('penjadwalan/' . $value->id . '/edit') }}">Edit </a>
        </td>

        @endif
    </tr>


    @endforeach


    </tbody>

</table>


@stop