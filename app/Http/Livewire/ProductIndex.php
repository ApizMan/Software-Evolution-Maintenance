<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\LunarProduct;
use Database\Seeders\Products;

class ProductIndex extends Component
{
    public $products;

    public function render()
    {
        // Fetch products with related brand and variants information using Eloquent relationships
        $this->products = LunarProduct::with('brand', 'variants')->get();

        return view('livewire.product-index');
    }
}
