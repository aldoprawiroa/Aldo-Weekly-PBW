<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<News>
 */
class BeritaFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakerEN = \Faker\Factory::create('en_US');

        return [
            'judul' => $fakerEN->sentence(),
            'slug' => $fakerEN->unique()->slug(),
            'penulis' => $fakerEN->name(),
            'konten' => $fakerEN->paragraphs(3, true),
        ];
    }
}
