@extends('layouts.main')

@section('content')

<h1 class="text-center">{{ $title }}</h1>

@foreach ($Beritas as $Berita)
<h2><a href="{{ route('berita.show', $Berita['slug']) }}">{{ $Berita['judul'] }}</a></h2>
<p>Penulis: {{ $Berita['penulis'] }}</p>
<p>{{ $Berita['konten'] }}</p>
<hr>
@endforeach

@endsection
