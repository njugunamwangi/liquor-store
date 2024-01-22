<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->word();
        $slug = Str::of($category)->slug();

        return [
            'category' => $category,
            'slug' => $slug,
            'image_id' => $this->faker->unique()->numberBetween(1, 5)
        ];
    }
}
