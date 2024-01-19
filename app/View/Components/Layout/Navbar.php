<?php

namespace App\View\Components\Layout;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
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
        $categories = CategoryResource::collection(Category::all());

        return view('components.layout.navbar', compact('categories'));
    }
}
