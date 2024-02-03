<?php

namespace Database\Seeders;

use App\Models\Flavor;
use App\Models\Savour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SavourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Whiskys
        $WhiskySavours = [
            'Dried Fruit and Nut',
            'Elegant and Floral',
            'Fresh Fruit and Vanilla',
            'Malt and Honey',
            'Maritime and Smoky',
            'Peat and Fruit',
            'Rich and Peaty',
            'Rich Fruit and Spice',
        ];

        foreach ($WhiskySavours as $savour) {
            Savour::create([
                'savour' => $savour,
                'slug' => Str::slug($savour),
                'flavor_id' => Flavor::where('flavor', '=', 'Whisky')->first()->id,
            ]);
        }

        // Beers
        $beerSavours = [
            'Cider', 'Malt', 'Lite', 'Lager', 'Stout', 'Strong'
        ];

        foreach ($beerSavours as $savour) {
            Savour::create([
                'savour' => $savour,
                'slug' => Str::slug($savour),
                'flavor_id' => Flavor::where('flavor', '=', 'Beer')->first()->id,
            ]);
        }
    }
}
