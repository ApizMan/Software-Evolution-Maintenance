<?php
namespace Lunar\Hub\Http\Livewire\Pages\Products;

use Livewire\Component;
use App\Models\LunarProduct;

class ProductIndex extends Component
{
    public $products;

    public function render()
    {
        $this->products = LunarProduct::all();

        return view('livewire.product-index');
    }
}

