<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\RestaurantProduct;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $restaurant_name = $request->restaurant;
        $restaurant = Restaurant::where('name' , $restaurant_name)->first();
        if(!$restaurant){
            return response()->json(['error' => 'Restaurant not found'], 404);
        }
        $restaurant_id = $restaurant->id;
        $restaurantProducts = RestaurantProduct::where('restaurant_id' , $restaurant_id)->get();
        $productsData = [];

        foreach ($restaurantProducts as $restaurantProduct) {
            $product = Product::find($restaurantProduct->product_id);
            if ($product) {
                $productsData[] = $product;
            }
        }

        return response()->json($productsData);
    }
}
