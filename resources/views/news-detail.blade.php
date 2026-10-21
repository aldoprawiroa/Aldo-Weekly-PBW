@extends('layouts.main')

@section('content')

<h1 class="text-center">{{ $berita['judul'] }}</h1>
<p>Penulis: {{ $berita['penulis'] }}</p>
<p>{{ $berita['konten'] }}</p>
<a href="{{ route('berita.index') }}">Kembali ke Berita</a>

@endsection
