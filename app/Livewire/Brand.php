<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Brand extends Component
{
    public \App\Models\Brand $brand;

    public function render()
    {
        $brand = $this->brand;

        $products = Product::query()
            ->where('brand_id', '=', $this->brand->id)
            ->get();

        return view('livewire.brand', compact('brand', 'products'))
            ->layout('layouts.app', ['title' => $this->brand->brand]);
    }
}
