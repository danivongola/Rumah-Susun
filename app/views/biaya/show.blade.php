@extends('home.index')

@section('content')
<br>
<br>
<h1>Biaya Bulanan Penghuni</h1>

<ol style="font-size: 20px">
    <li>No Kamar : {{$biaya->kamar->no_kamar}}</li>
    <li>No Lantai : {{$biaya->kamar->lantai}}</li>
    <li>Nama Penghuni: {{$biaya->kamar->users->detailuser->nama}}</li>
    <li>Sewa Air : {{$biaya->air}}</li>
    <li>Sewa Listrik : {{$biaya->listrik}}</li>
    <li>Sewa Kamar : {{$biaya->kamar->harga_kamar}}</li>
    <li>Jumlah Total Biaya : {{$biaya->sum('air')+$biaya->sum('listrik')+$biaya->kamar->sum('harga_kamar')}}</li>
</ol>


@stop