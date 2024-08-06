<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


//http://127.0.0.1:8000/admin/product/api
class ProductController extends Controller
{
    public function getProduct()
    {
        $listProduct = Product::select('product_id', 'name', 'description', 'price', 'image')->get();
        return response()->json([
            'data' => $listProduct
        ], 200);
    }

    public function getOneProduct($idProduct)
    {
        $listProduct = Product::select('product_id', 'name', 'description', 'price', 'image')->where('product_id', $idProduct)->first();
        // $listProduct = Product::select('product_id', 'name', 'description', 'price', 'image')->find('product_id', $idProduct);
        return response()->json([
            'data' => $listProduct
        ], 200);
    }

    public function addProduct(Request $req){
        $data = json_decode($req -> getContent());

        $data = [
            'name' => $req -> name,
            'price' => $req -> price,
        ];

        $product = Product::create($data);

        return response() -> json([
            'data' => $product
        ],200);
    }
}
