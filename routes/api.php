<?php

use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Restaurants\RestaurantsController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/signUp',[SignUpController::class,'signup']);
Route::post('/signin',[SignInController::class,'signin']);
Route::post('/get/products/in/each/restaurant',[ProductsController::class,'index']);
Route::post('/search/by/product',[SearchController::class,'searchByProduct']);
Route::get('/get/restaurants',[RestaurantsController::class,'index']);

Route::post('/get/dis',[SearchController::class,'calculateDistanceAndDirections']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
