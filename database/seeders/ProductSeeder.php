<?php

namespace Database\Seeders;

use App\Models\Amount;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Flavor;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(10)->create();
    }
}
