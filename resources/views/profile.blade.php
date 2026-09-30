@extends('layouts.main')

@section('content')
<h1>PROFILE PAGE</h1>

<p>Nama : {{ $name }}</p>
<p>NIM : {{ $nim }}</p>
<p>Prodi : {{ $prodi }}</p>

<img src="{{ asset('images/' . $img) }}" width="200">
@endsection