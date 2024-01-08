<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\LunarProduct;

class ProductIndex extends Component
{
    public $products;

    public function render()
    {
        // Fetch products with related brand, variants, and product type information using Eloquent relationships
        $this->products = LunarProduct::with('brand', 'variants', 'productType')->get();

        return view('livewire.product-index');
    }
}
