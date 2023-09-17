<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            "title" => "Muy baja",
            "slug" => Str::slug("Muy baja")
        ]);
        Level::create([
            "title" => "Baja",
            "slug" => Str::slug("Baja")
        ]);
        Level::create([
            "title" => "Media",
            "slug" => Str::slug("Media")
        ]);
        Level::create([
            "title" => "Alta",
            "slug" => Str::slug("Alta")
        ]);
    }
}
