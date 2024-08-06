<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function dashboard()
    {
        $listPro = Product::all();
        return view('dashboar')->with([
            'list' => $listPro
        ]);
    }

    public function searchProduct(Request $req)
    {
        $product = Product::where('name', 'like', "%$req->search%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $product,
            'status_code' => 200
        ], 200);
    }

    public function deatilProduct(Request $req)
    {   
        $product = Product::find($req -> idProduct);
        dd($product);
    }
}
