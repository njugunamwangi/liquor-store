<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Flavor;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = ['Gold Label', 'Blue Label', 'Green Label', 'Black Label', 'Double Black', 'Red Label'];

        foreach($products as $product) {
            Product::factory()->create([
                'product' => $product,
                'slug' => Str::slug($product),
                'category_id' => 1,
                'flavor_id' => 2,
                'brand_id' => 10
            ]);
        }

    }
}
