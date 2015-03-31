@extends('home.index')

@section('content')
<br>
<br>
<h1>Daftar Calon Penghuni Lulus Seleksi</h1>
<a href="{{ URL::to('kamar/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>


<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>nama</td>
        <td>nik</td>
        <td>alamat</td>
        <td>no_telepom
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($kamar as $key => $value)
    <tr>
        <td>{{ $value->no_kamar }}</td>
        <td>{{ $value->lantai }}</td>
        <td>{{ $value->harga_kamar}}</td>
        <td style="width:150px;">{{ Form::open(array('url' => 'kamar/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
            <a class="pull-right btn btn-info" href="{{ URL::to('kamar/' . $value->id . '/edit') }}">Edit </a>
        </td>
    </tr>
    @endforeach
    {{$kamar->links()}}
    </tbody>

</table>
<br>
<br>


@stop