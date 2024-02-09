<?php

namespace App\View\Components\Home;

use App\Models\Flavor;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShopByFlavor extends Component
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
        $flavors = Flavor::has('products')->limit(4)->get();

        return view('components.home.shop-by-flavor', compact('flavors'));
    }
}
