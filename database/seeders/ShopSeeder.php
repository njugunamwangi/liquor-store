<?php

namespace Database\Seeders;

use App\Models\Amount;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Flavor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        Flavor::factory(10)->create();
        Brand::factory(20)->create();
        Amount::factory(5)->create();
    }
}
