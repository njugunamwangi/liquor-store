<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Brands extends Component
{
    public $hoveredBrand;

    #[Layout('components.layouts.app')]
    #[Title('Brands')]
    public function render()
    {
        $brands = Brand::query()
            ->has('products')
            ->get();

        return view('livewire.brands', compact('brands'));
    }

    public function setHoveredBrand($brand) {
        $this->hoveredBrand = Brand::find($brand);
    }
}
