<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', function(){
    return Product::all();
});

Route::post('/products', function() {
    return Product::create([
        'name' => 'Prpoduct One',
        'slug' => 'product-one',
        'description' => 'This is product one',
        'price' => '99.99'
    ]);
});