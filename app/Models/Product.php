<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category'
    ];

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_products')->withPivot('quantity', 'price');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}