@extends('home.index')

@section('content')
<br>
<br>
<h1>Daftar Kamar</h1>
<a href="{{ URL::to('kamar/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>


<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>No Kamar</td>
        <td>No Lantai</td>
        <td>Harga Kamar</td>
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