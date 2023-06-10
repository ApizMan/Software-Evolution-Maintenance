<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lunar\Models\Product;
use Lunar\Models\ProductVariant;
use Lunar\Models\ProductOption;
use Lunar\Models\ProductOptionValue;
use Lunar\Models\Collection;
use Lunar\Models\Customer;
use Lunar\Models\Cart;
use Lunar\Models\CartLine;
use Lunar\Models\Order;
use Lunar\Models\OrderLine;

class LunarModel extends Model
{
    use HasFactory;
}

public function boot()
{
    $models = collect([
        Product::class => \App\Models\Product::class,
        ProductVariant::class => \App\Models\ProductVariant::class,
        ProductOption::class => \App\Models\ProductOption::class,
        ProductOptionValue::class => \App\Models\ProductOptionValue::class,
        Collection::class => \App\Models\Collection::class,
        Customer::class => \App\Models\Customer::class,
        Cart::class => \App\Models\Cart::class,
        CartLine::class => \App\Models\CartLine::class,
        Order::class => \App\Models\Order::class,
        OrderLine::class => \App\Models\OrderLine::class,
    ]);

    ModelManifest::register($models);
}
