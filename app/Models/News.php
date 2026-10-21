<?php

namespace App\Models;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'beritas';

    protected $fillable = ['judul', 'slug', 'penulis', 'konten'];

    public static function GetBerita(string $slug): View
    {
        $berita = self::where('slug', $slug)->firstOrFail();

        return view('news-detail', [
            'title' => $berita->judul,
            'berita' => $berita,
        ]);
    }
}
