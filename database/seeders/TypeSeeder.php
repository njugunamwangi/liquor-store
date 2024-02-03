<?php

namespace Database\Seeders;

use App\Models\Flavor;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Single Malt', 'Blended Whisky', 'Blended Malt', 'Grain Whisky', 'Organic Whisky'
        ];

        foreach ($types as $type) {
            Type::create([
                'type' => $type,
                'slug' => Str::slug($type),
                'flavor_id' => Flavor::where('flavor', '=', 'Whiskey')->first()->id,
            ]);
        }
    }
}
