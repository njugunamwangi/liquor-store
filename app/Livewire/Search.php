<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

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

    public function closeSearch() {
        $this->search = null;
    }

    public function addToCart(int $productId)
    {
        if (! Auth::check()) {
            Toaster::info('Please login to proceed');
        } else {

            $model = Cart::query()
                ->where('user_id', '=', auth()->user()->id)
                ->where('product_id', '=', $productId)
                ->first();

            if (! $model) {

                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId,
                    'quantity' => 1,
                ]);
                $this->dispatch('CartUpdated');

                Toaster::success('Product added to cart');
            } else {
                Toaster::warning('Product already added to cart.');
            }
        }
    }
}
