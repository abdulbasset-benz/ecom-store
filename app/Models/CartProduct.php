<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CartProduct extends Pivot
{
    protected $table = 'cart_products';

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'price'
    ];

    
    public $timestamps = true;
}