<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude',
        'phone',
        'email',
        'url',
        'country',
        'city',
        'primary_category_name',
        'image_url',
        'star_count',
        'rating_count',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
