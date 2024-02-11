<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Flavor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FlavorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distilledFlavors = ['Cognac','Whisky', 'Gin', 'Absinthe', 'Rum', 'Tequila', 'Vodka', 'Brandy'];

        foreach ($distilledFlavors as $flavor) {
            Flavor::create([
                'flavor' => $flavor,
                'slug' => Str::slug($flavor),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
            ]);
        }

        $undistilledFlavors = ['Beer', 'Sake', 'Wine', 'Fortified Wine'];

        foreach ($undistilledFlavors as $flavor) {
            Flavor::create([
                'flavor' => $flavor,
                'slug' => Str::slug($flavor),
                'category_id' => Category::where('category', '=', 'Undistilled')->first()->id,
            ]);
        }
    }
}
