<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Cost;
use App\Models\Level;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(10);

        return [
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => $this->faker->paragraph(10),
            "active" => $this->faker->randomElement([Recipe::ACTIVE, Recipe::NOT_ACTIVE]),
            "user_id" => User::all()->random()->id,
            "category_id" => Category::all()->random()->id,
            "cost_id" => Cost::all()->random()->id,
            "level_id" => Level::all()->random()->id
        ];
    }
}
