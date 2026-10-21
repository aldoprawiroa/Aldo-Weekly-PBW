<?php

namespace Database\Seeders;

use App\Models\News as Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([
            [
                'judul' => 'Experience for being the only hope of the family',
                'slug' => 'experience-for-being-the-only-hope-of-the-family',
                'penulis' => 'Aldo Prawiro Akbar',
                'konten' => 'Experience for being the only hope of the family adalah sebuah artikel yang membahas tentang pengalaman menjadi satu-satunya harapan keluarga. Artikel ini ditulis oleh Aldo Prawiro Akbar, seorang mahasiswa Teknologi Informasi di Universitas cihuy. Dalam artikel ini, Aldo menceritakan pengalamannya menjadi satu-satunya harapan keluarga dan bagaimana hal itu mempengaruhi kehidupannya sehari-hari.',
            ],
            [
                'judul' => 'Experience for being ugly',
                'slug' => 'experience-for-being-ugly',
                'penulis' => 'Aldo Prawiro Akbar',
                'konten' => 'Experience for being ugly adalah sebuah artikel yang membahas tentang pengalaman menjadi jelek. Artikel ini ditulis oleh Aldo Prawiro Akbar, seorang mahasiswa Teknologi Informasi di Universitas cihuy. Dalam artikel ini, Aldo menceritakan pengalamannya menjadi jelek dan bagaimana hal itu mempengaruhi kehidupannya sehari-hari.',
            ],
        ] as $berita) {
            Berita::firstOrCreate(['slug' => $berita['slug']], $berita);
        }
    }
}
