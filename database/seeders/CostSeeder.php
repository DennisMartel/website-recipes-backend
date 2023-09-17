<?php

namespace Database\Seeders;

use App\Models\Cost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cost::create([
            "title" => "Barato",
            "slug" => Str::slug("Barato")
        ]);
        Cost::create([
            "title" => "Medio",
            "slug" => Str::slug("Medio")
        ]);
        Cost::create([
            "title" => "Caro",
            "slug" => Str::slug("Caro")
        ]);
    }
}
