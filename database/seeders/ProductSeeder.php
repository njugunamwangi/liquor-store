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
        // Johnnie Walker - Whisky
        $johnnie = ['Gold Label', 'Blue Label', 'Green Label', 'Black Label', 'Double Black', 'Red Label', 'Platinum Label'];

        foreach($johnnie as $product) {
            Product::factory()->create([
                'product' => $product,
                'slug' => Str::slug($product),
                'category_id' => 1,
                'flavor_id' => 2,
                'brand_id' => 10
            ]);
        }

        // Henny - Cognac
        $henny = ['Hennessy VSOP Privilege Cognac', 'Hennessy XO Marc Newson Edition II Cognac', 'Hennessy XO by Yan Pei-Ming'];

        foreach($henny as $product) {
            Product::factory()->create([
                'product' => $product,
                'slug' => Str::slug($product),
                'category_id' => 1,
                'flavor_id' => 1,
                'brand_id' => 2
            ]);
        }

        // Absolut - Vodka
        $absolut = ['Absolut Drop Vodka', 'Absolut Citron Vodka', 'Absolut Vanilla Vodka', 'Absolut Mandarin Vodka'];

        foreach($henny as $product) {
            Product::factory()->create([
                'product' => $product,
                'slug' => Str::slug($product),
                'category_id' => 1,
                'flavor_id' => 7,
                'brand_id' => 35
            ]);
        }

        // 1800 - Tequila
        $tequila = ['1800 Anejo Tequila', '1800 Coconut Tequila', '1800 Silver Tequila', '1800 Extra Milenio Anejo Tequila', '1800 Reposado Tequila'];

        foreach($tequila as $product) {
            Product::factory()->create([
                'product' => $product,
                'slug' => Str::slug($product),
                'category_id' => 1,
                'flavor_id' => 6,
                'brand_id' => 28
            ]);
        }
    }
}
