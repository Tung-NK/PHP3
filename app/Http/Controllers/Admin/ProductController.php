<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function listProduct()
    {
        $data = Product::paginate(5);
        return view('admin.products.list')->with(['data' => $data]);
    }

    public function addPr()
    {
        return view('admin.products.add');
    }

    public function addPostProduct(Request $req)
    {
        $linkImg = '';
        if ($req->hasFile('imgSP')) {
            $image = $req->file('imgSP');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStore = "img/";
            $image->move(public_path($linkStore), $newName);
            $linkImg = $linkStore . $newName;
        }
        $data = [
            'name' => $req->nameSP,
            'price' => $req->priceSp,
            'image' => $linkImg,
            'description' => $req->description,
        ];
        // dd($data);
        Product::create($data);
        return redirect()->route('admin.products.listProduct');
    }

    public function deleteProduct(Request $req)
    {
        $product = Product::where('product_id', $req->idproduct);
        if ($product->first()->image != null && $product->first()->image != "") {
            File::delete(public_path($product->first()->image));
        }
        $product->delete();
        return redirect()->route('admin.products.listProduct')->with([
            'err' => 'Done'
        ]);
    }

    public function detailProduct($idProduct)
    {
        $product = Product::where('product_id', $idProduct)->first();
        return view('admin.products.detail')->with([
            'product' => $product
        ]);
    }

    public function updateProduct($idProduct)
    {
        $product = Product::where('product_id', $idProduct)->first();
        return view('admin.products.update')->with([
            'product' => $product
        ]);
    }

    public function updatePath(Request $req, $idProduct)
    {
        $product= Product::where('product_id',$idProduct )->first();
        $linkImg = $product -> image;
        if ($req->hasFile('imgSP')) {

            File::delete(public_path($product -> image));
            $image = $req->file('imgSP');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStore = "img/";
            $image->move(public_path($linkStore), $newName);
            $linkImg = $linkStore . $newName;
        }
        $data = [
            'name' => $req->nameSP,
            'price' => $req->priceSp,
            'image' => $linkImg,
            'description' => $req->description,
        ];
        Product::where('product_id',$idProduct )-> update($data);
        return redirect()->route('admin.products.listProduct')->with([
            'err' => 'Done'
        ]);
    }
}
