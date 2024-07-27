<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Authentication

class AuthenController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ])) {
            if (Auth::user()->role == '1') {
                // if(Auth::check()){
                //     echo "1";
                // }
                // die;
                return redirect()->route('admin.products.listProduct');
            } else {
                return redirect()->route('login')->with([
                    'err' => "Ban khong co quyen han",
                ]);
            }
        }
        return redirect()->route('login')->with([
            'err' => "Sai email hoac mat khau",
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
