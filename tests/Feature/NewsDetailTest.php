<?php

namespace Tests\Feature;

use Tests\TestCase;

class NewsDetailTest extends TestCase
{
    public function test_news_details_render_and_unknown_slugs_return_not_found(): void
    {
        foreach ([
            'experience-for-being-the-only-hope-of-the-family' => 'Experience for being the only hope of the family',
            'experience-for-being-ugly' => 'Experience for being ugly',
        ] as $slug => $title) {
            $this->get('/news/'.$slug)
                ->assertOk()
                ->assertViewIs('news-detail')
                ->assertSeeText($title)
                ->assertSeeText('Aldo Prawiro Akbar')
                ->assertSeeText('Universitas cihuy');
        }

        $this->get('/news/unknown-article')->assertNotFound();
    }
}
