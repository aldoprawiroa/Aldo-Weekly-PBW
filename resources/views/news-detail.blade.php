@extends('layouts.main')

@section('content')

<h1 class="text-center">{{ $news['judul'] }}</h1>
<p>Penulis: {{ $news['penulis'] }}</p>
<p>{{ $news['konten'] }}</p>
<a href="{{ url('/news') }}">Kembali ke News</a>

@endsection
