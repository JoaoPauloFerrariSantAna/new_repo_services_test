<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;


class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function get()
    {
        $products = $this->service->get();
        return response()->json($products);
    }

    public function details(int $id)
    {
        $product = $this->service->details($id);
        return response()->json($product);
    }

    public function store(Request $req)
    {
        $data = $req->all();
        $product = $this->service->store($data);
        return response()->json($product);
    }

    public function delete(int $id)
    {
        $product = $this->service->delete($id);
        return response()->json($product);
    }

    public function update(Request $req, int $id)
    {
        $data = $req->all();
        $product = $this->service->update($data, $id);
        return response()->json($product);
    }
}