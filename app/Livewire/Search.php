<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search = "";

    public $hoveredProduct;

    public function render()
    {
        $products = [];

        if (strlen($this->search) >= 1) {
            $products = Product::query()
                ->where('product', 'like', "%$this->search%")
                ->limit(10)
                ->get();
        }

        return view('livewire.search', compact('products'));
    }

    public function setHoveredProduct($product) {
        $this->hoveredProduct = Product::find($product);
    }
}
