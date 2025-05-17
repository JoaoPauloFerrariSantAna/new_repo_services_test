<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function get() { return Product::all(); }
    public function details(int $id) { return Product::find($id); }
    public function store(array $data) { return Product::create($data); }

    public function delete(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return $product;
    }

    public function update(array $data, int $id)
    {
        $product = Product::find($id);

        if($data["pname"] != null) {
            $product->name = $data["pname"];
        }

        if($data["pdesc"] !== null){
            $product->descripion = $data['pdesc'];
        }

        if($data["pprice"] !== null){
            $product->price = $data["pprice"];
        }

        $product->save();

        return $product;
    }
}