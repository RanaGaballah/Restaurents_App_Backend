<?php

namespace App\Http\Controllers\Restaurants;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return response()->json([
            'message' => 'Retrive Restaurants successfully',
            'restaurants' => $restaurants,
        ], 200);
    }
}
