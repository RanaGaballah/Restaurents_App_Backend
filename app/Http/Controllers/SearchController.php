<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Restaurant;
use App\Models\RestaurantProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function searchByProduct(Request $request)
    {
        $productName = $request->input('product_name');

        // Find all products that match the query
        $products = Product::where('product_name', 'like', '%' . $productName . '%')->get();

        // If no products found, return 404 response
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found for the given search query'], 404);
        }

        // Prepare an array to store the result data
        $responseData = [];

        // Iterate over each product to find the restaurants that have it
        foreach ($products as $product) {
            $restaurantProducts = RestaurantProduct::where('product_id', $product->id)->get();
            $restaurants = [];

            // Retrieve restaurant data for each product
            foreach ($restaurantProducts as $restaurantProduct) {
                $restaurant = Restaurant::find($restaurantProduct->restaurant_id);
                if ($restaurant) {
                    $restaurants[] = $restaurant;
                }
            }

            // Add product and associated restaurants to the response data
            $responseData[] = [
                'product' => $product,
                'restaurants' => $restaurants
            ];
        }

        // Return the response with the product and associated restaurants
        return response()->json([
            'message' => 'Retrieved restaurants for search product successfully',
            'products' => $responseData
        ], 200);
    }


    public function calculateDistanceAndDirections(Request $request)
    {
        
        if (!$request->has(['user_location', 'restaurant_location'])) {
            return response()->json(['error' => 'Missing user_location or restaurant_location parameter'], 400);
        }

        
        $userLocation = $request->input('user_location');
        $restaurantLocation = $request->input('restaurant_location');


        $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json', [
            'origins' => $userLocation,
            'destinations' => $restaurantLocation,
            'key' => 'AIzaSyByShE5cMW0PvduXAH6PBBxWV8G7nT-zg0',
        ]);

        $data = $response->json();


    
        
        return response()->json([
            'distance' => $data,
            
        ]);
    }

}
