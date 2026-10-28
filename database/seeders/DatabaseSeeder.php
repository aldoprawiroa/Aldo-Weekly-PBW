<?php

namespace Database\Seeders;

use App\Models\News as Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Berita::factory(5)->create();
    }
}
