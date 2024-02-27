<?php

namespace App\Livewire;

use App\Models\Flavor;
use Livewire\Component;

class Flavors extends Component
{
    public $hoveredFlavor;

    public function render()
    {
        $flavors = Flavor::query()
            ->has('products')
            ->get();

        return view('livewire.flavors', compact('flavors'))
            ->layout('components.layouts.app', ['title' => 'Flavors']);
    }

    public function setHoveredFlavor($flavor) {
        $this->hoveredFlavor = Flavor::find($flavor);
    }
}
