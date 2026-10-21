<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Aldo Prawiro Akbar',
        'nim' => '13242520007',
        'prodi' => 'Teknologi Informasi',
        'img' => 'Aldo.png',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampildata'])->name('berita.index');

Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal'])->name('berita.show');

Route::redirect('/news', '/berita');
Route::redirect('/news/{slug}', '/berita/{slug}');
