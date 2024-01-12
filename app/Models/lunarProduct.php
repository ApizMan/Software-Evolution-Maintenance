<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunarProduct extends Model
{
    use HasFactory;

    protected $table = "lunar_products";

    // Define the brand relationship
    public function brand()
    {
        return $this->belongsTo(LunarBrand::class, 'brand_id');
    }

    // Define the variants relationship
    public function variants()
    {
        return $this->hasOne(LunarProductVariant::class, 'product_id');
    }

    // Define the product type relationship
    public function productType()
    {
        return $this->belongsTo(LunarProductType::class, 'product_type_id');
    }
}
