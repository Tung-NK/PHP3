<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Authentication
use App\Http\Requests\UserLoginRequest;

class AuthenController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function postLogin(Request $req)
    {

        $req->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Khong duoc de trong email',
            'email.email' => 'Phai dung dinh dang email',
            'email.exists' => 'Email khong ton tai',
            'password.required' => 'Mat khau khong duoc de trong',
            'password.min' => 'Mat khau dai hon 6 ki tu',
        ]);
        // unique -> dung de dang ki
        // exits -> dung de dang nhap

        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ])) {
            if (Auth::user()->role == '1') {
                return redirect()->route('admin.products.listProduct');
            } elseif (Auth::user()->role == '2') {
                return redirect()->route('users.dashboard');
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

    public function register()
    {
        return view('admin.register');
    }
}
