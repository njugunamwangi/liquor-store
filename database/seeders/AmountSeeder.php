<?php

namespace Database\Seeders;

use App\Models\Amount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amounts = ['250 ml', '330 ml', '350 ml', '500 ml', '700 ml', '750 ml', '800 ml', '1 L', '3 L', '5 L'];

        foreach ($amounts as $amount) {
            Amount::create([
                'amount' => $amount,
                'slug' => Str::slug($amount),
            ]);
        }
    }
}
