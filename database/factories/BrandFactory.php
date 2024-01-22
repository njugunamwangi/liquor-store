<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Flavor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $brand = $this->faker->name(),
            'slug' => Str::slug($brand),
            'featured_image_id' => $this->faker->numberBetween(1, 5),
            'category_id' => $category_id = $this->faker->randomElement(Category::all()->pluck('id')),
            'flavor_id' => $this->faker->randomElement(Flavor::query()->where('category_id', '=', $category_id)->pluck('id'))
        ];
    }
}
