<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'image_url',
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
