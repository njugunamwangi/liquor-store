<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Brand extends Component
{
    public \App\Models\Brand $brand;

    #[Layout('layouts.app')]
    public function render()
    {
        $brand = $this->brand;

        $products = Product::query()
            ->where('brand_id', '=', $this->brand->id)
            ->get();

        return view('livewire.brand', compact('brand', 'products'))
            ->title($this->brand->brand);
    }
}
