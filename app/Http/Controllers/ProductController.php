<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Tùng',
            ],
            [
                'id' => '2',
                'name' => 'Báo',
            ],
        ];

        return view('list') -> with([
            'listProduct' => $data
        ]);
    }


    public function getProduct($id, $name = "haha")
    {
        echo $id;
        echo $name;
    }

    public function upadateProduct(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }
}
