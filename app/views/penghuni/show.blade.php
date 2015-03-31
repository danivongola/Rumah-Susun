@extends('home.index')

@section('content')
<br>
<br>

<h1>{{$penghuni->detailuser->nama}}</h1>
@if($penghuni->isAdmin())
<a href="{{ URL::to('perpanjangan/'.$penghuni->id.'/edit') }}"><button type="submit" class="btn btn-primary">Perpanjangan</button></a>
@endif
<ol style="font-size: 20px">
    <li>No Kamar : {{$penghuni->kamar->lantai}}</li>
    <li>No Lantai : {{$penghuni->kamar->lantai}}</li>
    <li>NIK : {{$penghuni->detailuser->nik}}</li>
    <li>Alamat : {{$penghuni->detailuser->alamat}}</li>
    <li>No Telepon : {{$penghuni->detailuser->no_telepon}}</li>
    <li>Pekerjaan : {{$penghuni->detailuser->pekerjaan}}</li>
    <li>Gaji Bulanan : {{$penghuni->detailuser->gaji_bulanan}}</li>
    @if(!empty($penghuni->detailuser->tanggal_masuk))
    <li>Tanggal Masuk : {{$penghuni->detailuser->tanggal_masuk}}</li>
    @else
    @endif
    @if(!empty($penghuni->detailuser->tanggal_keluar))
    <li>Tanggal Keluar : {{$penghuni->detailuser->tanggal_keluar}}</li>
    @else
    @endif
    <li>Jumlah Keluarga : {{$penghuni->detailuser->jumlah_keluarga}}</li>


</ol>
<a class="btn btn-info" href="{{ URL::to('penghuni/' . $penghuni->id . '/edit') }}">Edit </a>

<br>
<br>


@stop