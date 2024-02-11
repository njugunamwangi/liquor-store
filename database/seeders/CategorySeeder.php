<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Distilled', 'Undistilled', 'Cocktail'];

        foreach ($categories as $category) {
            Category::create([
                'category' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
