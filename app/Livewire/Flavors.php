<?php

namespace App\Livewire;

use App\Models\Flavor;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Flavors extends Component
{
    public $hoveredFlavor;

    #[Layout('components.layouts.app')]
    #[Title('Flavors')]
    public function render()
    {
        $flavors = Flavor::query()
            ->has('products')
            ->get();

        return view('livewire.flavors', compact('flavors'));
    }

    public function setHoveredFlavor($flavor) {
        $this->hoveredFlavor = Flavor::find($flavor);
    }
}
