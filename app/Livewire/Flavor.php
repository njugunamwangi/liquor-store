<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Flavor extends Component
{
    public \App\Models\Flavor $flavor;

    public function render()
    {
        $products = Product::query()
            ->where('flavor_id', '=', $this->flavor->id)
            ->get();

        $flavor = $this->flavor;

        return view('livewire.flavor', compact('flavor', 'products'))
            ->layout('layouts.app', ['title' => $this->flavor->flavor]);
    }
}
