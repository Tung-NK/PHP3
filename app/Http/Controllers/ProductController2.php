<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController2 extends Controller
{
    public function listProduct()
    {
        $listProduct = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->select('product.id', 'product.name', 'product.price', 'product.view', 'category.name as tenDanhmuc')
            ->orderBy('product.view', 'desc')
            ->get();

        return view('product/list')->with([
            'listPro' => $listProduct
        ]);
    }

    public function viewAdd()
    {
        $category = DB::table('category')->get();
        return view('product/add')->with([
            'sp' => $category
        ]);
    }

    public function addProduct(Request $request)
    {
        $data = [
            'name' => $request->name,
            'category_id' => $request->danhmuc,
            'price' => $request->price,
            'view' => $request->view,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ];
        DB::table('product')->insert($data);

        return redirect()->route('product.listProduct');
    }

    public function viewUpdate($id)
    {
        $listProduct = DB::table('product')
            ->where('id', $id)
            ->first();
        $category = DB::table('category')->get();

        return view('product/update')->with([
            'list' => $listProduct,
            'sp' => $category
        ]);
    }

    public function updateProduct(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'category_id' => $request->danhmuc,
            'price' => $request->price,
            'view' => $request->view,
            'update_at' => Carbon::now(),
        ];
        DB::table('product')
            ->where('id', $id)
            ->update($data);

        return redirect()->route('product.listProduct');
    }

    public function delete($id)
    {
        DB::table('product')->where('id', $id)->delete();
        return redirect()->route('product.listProduct');
    }

    public function search(Request $req)
    {
        $products = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->select('product.id', 'product.name', 'product.price', 'product.view', 'category.name as tenDanhmuc')
            ->where('product.name', 'LIKE', '%' . $req->search . '%')
            ->get();

        return view('product/list')->with([
            'listPro' => $products
        ]);
    }
}
