<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Flavor extends Component
{
    public \App\Models\Flavor $flavor;

    #[Layout('layouts.app')]
    public function render()
    {
        $products = Product::query()
            ->where('flavor_id', '=', $this->flavor->id)
            ->get();

        $flavor = $this->flavor;

        return view('livewire.flavor', compact('flavor', 'products'))
            ->title($this->flavor->flavor);
    }
}
