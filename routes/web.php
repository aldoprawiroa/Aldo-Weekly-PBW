<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Aldo Prawiro Akbar",
        "nim" => "13242520007",
        "prodi" => "Teknologi Informasi",
        "img" => "Aldo.png"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "News",
        "news" => News::allNews(),
    ]);
});

Route ::get('/news/{slug}', function ($slug) {
    $data_berita = [
        [
            "judul" => "Experience for being the only hope of the family",
            "slug" => "experience-for-being-the-only-hope-of-the-family",
            "penulis" => "Aldo Prawiro Akbar",
            "konten" => "Experience for being the only hope of the family adalah sebuah artikel yang membahas tentang pengalaman menjadi satu-satunya harapan keluarga. Artikel ini ditulis oleh Aldo Prawiro Akbar, seorang mahasiswa Teknologi Informasi di Universitas cihuy. Dalam artikel ini, Aldo menceritakan pengalamannya menjadi satu-satunya harapan keluarga dan bagaimana hal itu mempengaruhi kehidupannya sehari-hari.",
        ],
        [
            "judul" => "Experience for being ugly",
            "slug" => "experience-for-being-ugly",
            "penulis" => "Aldo Prawiro Akbar",
            "konten" => "Experience for being ugly adalah sebuah artikel yang membahas tentang pengalaman menjadi jelek. Artikel ini ditulis oleh Aldo Prawiro Akbar, seorang mahasiswa Teknologi Informasi di Universitas cihuy. Dalam artikel ini, Aldo menceritakan pengalamannya menjadi jelek dan bagaimana hal itu mempengaruhi kehidupannya sehari-hari.",
        ]
    ];

    $news = null;
    foreach ($data_berita as $item) {
        if ($item['slug'] === $slug) {
            $news = $item;
            break;
        }
    }

    if ($news) {
        return view('news-detail', [
            'title' => $news['judul'],
            'news' => $news
        ]);
    } else {
        abort(404);
    }
});