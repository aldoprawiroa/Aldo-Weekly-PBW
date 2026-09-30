<?php

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
        "title" => "News"
    ]);
});