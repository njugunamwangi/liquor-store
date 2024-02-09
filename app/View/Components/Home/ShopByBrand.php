<?php

namespace App\View\Components\Home;

use App\Models\Brand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShopByBrand extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $brands = Brand::query()->has('products')->limit(5)->get();

        return view('components.home.shop-by-brand', compact('brands'));
    }
}
