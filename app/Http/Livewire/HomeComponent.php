<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;


class HomeComponent extends Component
{
    public $pagesize;

    public function mount()
    {
        $this->pagesize = 12;
    }

    use WithPagination;
    public function render()
    {
        $products = Product::paginate($this->pagesize);

        $popular_products = Product::inRandomOrder()->limit(4)->get();

        $categories = Category::all();

        return view('livewire.home-component', [
            'products' => $products,
            'popular_products' => $popular_products,
            'categories' => $categories
        ])->layout('layouts.base');
    }
}
