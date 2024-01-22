<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flavor>
 */
class FlavorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $flavor = $this->faker->name();
        $slug = Str::slug($flavor);

        return [
            'featured_image_id' => $this->faker->numberBetween(1, 5),
            'flavor' => $flavor,
            'slug' => $slug,
            'category_id' => $this->faker->randomElement(Category::pluck('id'))
        ];
    }
}
