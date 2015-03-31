@extends('home.index')

@section('content')
<br>
<br>
<h1>Calon Penghuni Lulus Seleksi</h1>

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
        <td><a class=" btn btn-info" href="{{ URL::to('cpls/' . $value->id . '/edit') }}"><i class="fa fa-check"></i> </a>
            @endif

        </td>

    </tr>
    @endforeach
    </tbody>
</table>
@stop