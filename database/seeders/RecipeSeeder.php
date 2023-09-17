<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipe::factory(50)->create()->each(function (Recipe $recipe) {
            Image::factory(2)->create([
                'imageable_id' => $recipe->id,
                'imageable_type' => Recipe::class
            ]);

            Ingredient::factory(4)->create([
                "recipe_id" => $recipe->id
            ]);

            Step::factory(2)->create([
                "recipe_id" => $recipe->id
            ]);
        });
    }
}
