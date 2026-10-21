<?php

namespace Tests\Feature;

use Database\Seeders\BeritaSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsDetailTest extends TestCase
{
    use RefreshDatabase;

    public function test_detail_berita_tampil_dan_slug_tidak_dikenal_menghasilkan_404(): void
    {
        $this->seed(BeritaSeeder::class);

        foreach ([
            'experience-for-being-the-only-hope-of-the-family' => 'Experience for being the only hope of the family',
            'experience-for-being-ugly' => 'Experience for being ugly',
        ] as $slug => $title) {
            $this->get('/berita/'.$slug)
                ->assertOk()
                ->assertViewIs('news-detail')
                ->assertSeeText($title)
                ->assertSeeText('Aldo Prawiro Akbar')
                ->assertSeeText('Universitas cihuy');
        }

        $this->get('/berita/unknown-article')->assertNotFound();
    }
}
