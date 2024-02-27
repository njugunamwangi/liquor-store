<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class Brands extends Component
{
    public $hoveredBrand;

    public function render()
    {
        $brands = Brand::query()
            ->has('products')
            ->get();

        return view('livewire.brands', compact('brands'))
            ->layout('components.layouts.app', ['title' => 'Brands']);
    }

    public function setHoveredBrand($brand) {
        $this->hoveredBrand = Brand::find($brand);
    }
}
