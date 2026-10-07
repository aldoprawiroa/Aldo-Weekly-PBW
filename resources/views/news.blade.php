@extends('layouts.main')

@section('content')

<h1 class="text-center">{{ $title }}</h1>

@foreach ($news as $item)
<h2><a href="news/{{ $item['slug'] }}">{{ $item['judul'] }}</a></h2>
<p>Penulis: {{ $item['penulis'] }}</p>
<p>{{ $item['konten'] }}</p>
<hr>
@endforeach

@endsection