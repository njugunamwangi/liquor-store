<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Cognac')->first()->id,
            ]);
        }

        // Whiskey
        $whiskey = ['Jameson', 'Jack Daniel\'s', 'Glenlivet', 'Johnnie Walker', 'Glenfiddich', 'Singleton'];

        foreach ($whiskey as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Whiskey')->first()->id,
            ]);
        }

        // Gin
        $gin = ['Gilbey\'s', 'Hendricks', 'Bombay Sapphire', 'Tanquarey', 'Gordons', 'Bombay Blanche'];

        foreach ($gin as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Gin')->first()->id,
            ]);
        }

        // Brandy
        $brandy = ['Richot', 'Viceroy', 'Don Montego'];

        foreach ($brandy as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Brandy')->first()->id,
            ]);
        }

        // Tequila
        $tequila = ['Camino', 'Sierra', 'Patron', 'Jose Cuervo', 'Olmeca', 'Poncos'];

        foreach ($tequila as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Tequila')->first()->id,
            ]);
        }

        // Rum
        $rum = ['Captain Morgan', 'Malibu', 'Bacardi', 'Old Monk', 'Old Nick', 'New Grove'];

        foreach ($rum as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Rum')->first()->id,
            ]);
        }

        // Vodka
        $vodka = ['Absolute Vodka', 'Smirnoff', 'Flirt', 'Skyy', 'Grey Goose', 'Ciroc'];

        foreach ($vodka as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Distilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Vodka')->first()->id,
            ]);
        }

        // Undistilled
        // Beer
        $beer = ['Guinness', 'Tusker', 'White Cap', 'Pilsner', 'Smirnoff Ice', 'Savanna'];

        foreach ($beer as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Undistilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Beer')->first()->id,
            ]);
        }

        // Wine
        $wine = ['4th Street', 'Four Cousins', 'Caprice', 'Martini', 'Overmeer', 'Nederburg'];

        foreach ($wine as $brand) {
            Brand::create([
                'brand' => $brand,
                'slug' => Str::slug($brand),
                'featured_image_id' => rand(12, 20),
                'category_id' => Category::where('category', '=', 'Undistilled')->first()->id,
                'brand_id' => Brand::where('brand', '=', 'Wine')->first()->id,
            ]);
        }
    }
}
