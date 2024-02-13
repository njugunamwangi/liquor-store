<?php

namespace Database\Factories;

use App\Models\Amount;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Flavor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product' => $product = $this->faker->name(),
            'slug' => Str::slug($product),
            'list_price' => $list_price = rand(1800, 2000),
            'retail_price' => $list_price - rand(200, 350),
            'status' => 1,
            'category_id' => $category_id = fake()->randomElement(Category::all()->pluck('id')),
            'flavor_id' => $flavor_id = fake()->randomElement(Flavor::where('category_id', $category_id)->get()->pluck('id')),
            'brand_id' => fake()->randomElement(Brand::where('flavor_id', $flavor_id)->get()->pluck('id')),
            'amount_id' => fake()->randomElement(Amount::all()->pluck('id')),
        ];
    }
}
