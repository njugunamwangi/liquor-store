<?php

namespace Database\Seeders;

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
        Category::factory(2)->create();
        Flavor::factory(10)->create();
    }
}
