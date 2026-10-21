<?php

namespace App\Http\Controllers;

use App\Models\News as Berita;

class BeritaController extends Controller
{
    public static function tampildata()
    {
        return view('news', [
            'title' => 'Berita',
            'Beritas' => Berita::all(),
        ]);
    }

    public static function tampilberitatunggal(string $slug)
    {
        $beritas = Berita::all();
        
        $singlenews = [];
        foreach ($beritas as $berita) {
            if ($berita->slug === $slug) {
                $singlenews = $singlenews;
                break;
            }
        }

        return Berita::GetBerita($slug);
    }
}