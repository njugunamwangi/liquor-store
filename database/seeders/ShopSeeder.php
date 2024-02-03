<?php

namespace Database\Seeders;

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
        $this->call(SavourSeeder::class);
        $this->call(TypeSeeder::class);
    }
}
