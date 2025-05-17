<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::controller(ProductController::class)->group(function() {
    Route::get("/products", "get");
    Route::get("/products/{id}", "details");
    Route::post("/products", "store");
    Route::delete("/products/{id}", "delete");
});

// Route::patch('/products/{id}', function(Request $request, $id){
//     $product = Product::find($id);

//     if($request->input('name') !== null){
//         $product->name = $request->input('name');
//     }
//     if($request->input('descripion') !== null){
//         $product->descripion = $request->input('descripion');
//     }
//     if($request->input('price') !== null){
//         $product->price = $request->input('price');
//     }

//     $product->save();

//     return response()->json($product);
// });