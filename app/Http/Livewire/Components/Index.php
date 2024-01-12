<?php

namespace App\Http\Livewire\Components\Products;

use Livewire\Component;
use App\Models\LunarProduct;

class Index extends Component
{
    public $products;

    public function render()
    {
        $this->products = LunarProduct::all();
        return view('livewire.components.products.tablelu', compact('products'));
    }
}
