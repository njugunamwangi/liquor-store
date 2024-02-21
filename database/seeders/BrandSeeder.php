<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Flavor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Distilled
        // Cognac
        $cognac = ['Courvoisier', 'Hennessy', 'Frapin', 'Remy Martin', 'Rine', 'Maxime'];

        foreach ($cognac as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Cognac')->first()->id,
            ]);
        }

        // Whisky
        $whisky = ['Jameson', 'Jack Daniel\'s', 'Glenlivet', 'Johnnie Walker', 'Glenfiddich', 'Singleton'];

        foreach ($whisky as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Whisky')->first()->id,
            ]);
        }

        // Gin
        $gin = ['Gilbey\'s', 'Hendricks', 'Bombay Sapphire', 'Tanquarey', 'Gordons', 'Bombay Blanche'];

        foreach ($gin as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Gin')->first()->id,
            ]);
        }

        // Brandy
        $brandy = ['Richot', 'Viceroy', 'Don Montego'];

        foreach ($brandy as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Brandy')->first()->id,
            ]);
        }

        // Tequila
        $tequila = ['Camino', 'Sierra', 'Patron', 'Jose Cuervo', 'Olmeca', 'Poncos'];

        foreach ($tequila as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Tequila')->first()->id,
            ]);
        }

        // Rum
        $rum = ['Captain Morgan', 'Malibu', 'Bacardi', 'Old Monk', 'Old Nick', 'New Grove'];

        foreach ($rum as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Rum')->first()->id,
            ]);
        }

        // Vodka
        $vodka = ['Absolute Vodka', 'Smirnoff', 'Flirt', 'Skyy', 'Grey Goose', 'Ciroc'];

        foreach ($vodka as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Vodka')->first()->id,
            ]);
        }

        // Undistilled
        // Beer
        $beer = ['Guinness', 'Tusker', 'White Cap', 'Pilsner', 'Smirnoff Ice', 'Savanna'];

        foreach ($beer as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Undistilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Beer')->first()->id,
            ]);
        }

        // Wine
        $wine = ['4th Street', 'Four Cousins', 'Caprice', 'Martini', 'Overmeer', 'Nederburg'];

        foreach ($wine as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'category_id' => Category::where('category', '=', 'Undistilled')->first()->id,
                'flavor_id' => Flavor::where('flavor', '=', 'Wine')->first()->id,
            ]);
        }
    }
}
