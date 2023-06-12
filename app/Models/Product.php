<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = "products";
    protected $fillable = ['name', 'type_sale', 'regular price', 'sale_price', 'stock_status', 'quantity',];
}
