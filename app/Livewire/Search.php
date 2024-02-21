<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public $hoveredProduct;

    public function render()
    {
        $products = [];

        $search = $this->search;

        if (strlen($this->search) >= 1) {
            $products = Product::query()
                ->select('products.*', 'flavors.flavor as flavor_name')
                ->select('products.*', 'brands.brand as brand_name')
                ->leftJoin('flavors', 'products.flavor_id', '=', 'flavors.id')
                ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
                ->where('products.product', 'like', "%$this->search%")
                ->orWhere('flavors.flavor', 'like', "%$this->search%")
                ->orWhere('brands.brand', 'like', "%$this->search%")
                ->limit(10)
                ->get();
        }

        return view('livewire.search', compact('products', 'search'));
    }

    public function setHoveredProduct($product)
    {
        $this->hoveredProduct = Product::find($product);
    }
}
