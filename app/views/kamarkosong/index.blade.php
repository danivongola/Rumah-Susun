@extends('home.index')

@section('content')
<br>
<br>
<h1>Kamar Kosong</h1>
@if($user->isAdmin())
<a href="{{ URL::to('kamarkosong/create') }}"><button type="submit" class="btn btn-primary">Tambahh</button></a>
@endif


<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>No Kamar</td>
        <td>No Lantai</td>
        <td>Harga Kamar</td>
    </tr>
    </thead>
    <tbody>
    @foreach($kamarkosong as $key => $value)
    <tr>
        <td>{{ $value->no_kamar}}</td>
        <td>{{ $value->lantai }}</td>
        <td>{{ $value->harga_kamar }}</td>
        @if($user->isAdmin())
        <td style="width:150px;">{{ Form::open(array('url' => 'keluhan/' . $value->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' =>'pull-left btn btn-danger')) }}
            {{ Form::close() }}
        </td>
        @endif

    </tr>
    @endforeach
    {{$kamarkosong->links()}}
    </tbody>

</table>
<br>
<br>


@stop