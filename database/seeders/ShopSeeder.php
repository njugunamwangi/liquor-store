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
        $this->call(FlavorSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(AmountSeeder::class);
    }
}
