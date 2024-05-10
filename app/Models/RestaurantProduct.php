<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RestaurantProduct extends Pivot
{
    use HasFactory;
    protected $table = 'restaurant_products';
    protected $fillable = [
        'restaurant_id',
        'product_id'
    ];
}
