<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SVController;
use App\Http\Controllers\UserController;


// GET, POST, PUT, PATCH, DELETE (method giao thức http)
// Base url: [http://127.0.0.1:8000]
// Quy chuẩn sale: "danh-sach-san-pham"


Route::get('home', function () {
    echo "123";
});

Route::get('/', function () {
    echo 'Đây là php3';
});


Route::get('list-product', [ProductController::class, 'showProduct']);


// Truyền dũ liệu từ Route => Controller

//Slug
// http://127.0.0.1:8000/get-product/3
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);


//Params
// http://127.0.0.1:8000/update-product?id=3&name=iphone
Route::get('update-product/{id}/{name}', [ProductController::class, 'upadateProduct']);


// Lab1

Route::get('thong-tin-sv', [SVController::class, 'getSV']);



// Lab 2

Route::get('query-builder', [ProductController::class, 'queryBuilder']);

// CRUD bảng users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('list-users', [UserController::class, 'listUsers'])->name('list');

    Route::get('add-users', [UserController::class, 'viewAdd'])->name('addUsers'); // đặt trung hàm cx đc
    Route::post('add-users', [UserController::class, 'add'])->name('add');

    Route::get('update-users/{{id}}', [UserController::class, 'viewUpdate'])->name('viewUpdate');
});
