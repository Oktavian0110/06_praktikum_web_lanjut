@extends('layouts.pasta')

@foreach($data as $item)
    <h3>{{$item['nama']}}</h3><br>
    <h4> Kategori : {{$item['kategori']}}</h4><br>
    <p>{{$item['keterangan']}}</p><br>
@endforeach