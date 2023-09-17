<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "title" => "Postres",
            "slug" => Str::slug("Postres")
        ]);
        Category::create([
            "title" => "Pasta",
            "slug" => Str::slug("Pasta")
        ]);
        Category::create([
            "title" => "Verduras",
            "slug" => Str::slug("Verduras")
        ]);
        Category::create([
            "title" => "Huevos y Lacteos",
            "slug" => Str::slug("Huevos y Lacteos")
        ]);
        Category::create([
            "title" => "Ensaladas",
            "slug" => Str::slug("Ensaladas")
        ]);
        Category::create([
            "title" => "Carne",
            "slug" => Str::slug("Carne")
        ]);
        Category::create([
            "title" => "Pescado",
            "slug" => Str::slug("Pescado")
        ]);
        Category::create([
            "title" => "Salsas",
            "slug" => Str::slug("Salsas")
        ]);
    }
}
