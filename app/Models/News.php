<?php

namespace App\Models;

use Database\Factories\BeritaFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $fillable = ['judul', 'slug', 'penulis', 'konten'];

    protected static function newFactory(): BeritaFactory
    {
        return BeritaFactory::new();
    }

    public static function GetBerita(string $slug): View
    {
        $berita = self::where('slug', $slug)->firstOrFail();

        return view('news-detail', [
            'title' => $berita->judul,
            'berita' => $berita,
        ]);
    }
}
