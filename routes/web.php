<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\SVController;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\User\DashboarController;

// use App\Http\Kernel;
// use App\Http\Middleware\CheckAdminMiddleware;

// GET, POST, PUT, PATCH, DELETE (method giao thức http)
// Base url: [http://127.0.0.1:8000]
// Quy chuẩn sale: "danh-sach-san-pham"


// Route::get('home', function () {
//     echo "123";
// });

// Route::get('/', function () {
//     echo 'Đây là php3';
// });


// Route::get('list-product', [ProductController::class, 'showProduct']);


// // Truyền dũ liệu từ Route => Controller

// //Slug
// // http://127.0.0.1:8000/get-product/3
// Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);


// //Params
// // http://127.0.0.1:8000/update-product?id=3&name=iphone
// Route::get('update-product/{id}/{name}', [ProductController::class, 'upadateProduct']);


// // Lab1

// Route::get('thong-tin-sv', [SVController::class, 'getSV']);



// // Lab 2

// Route::get('query-builder', [ProductController::class, 'queryBuilder']);

// // CRUD

// Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
//     Route::get('listUser', [UserControler::class, 'listUser'])->name('listUser');

//     Route::get('addUser', [UserControler::class, 'viewAdd'])->name('viewAdd');
//     Route::post('addUser', [UserControler::class, 'addUser'])->name('addUser');

//     Route::get('detaillUser/{id}', [UserControler::class, 'detail'])->name('detail');
//     Route::post('detaillUser/{id}', [UserControler::class, 'update'])->name('update');

//     Route::get('delete/{id}', [UserControler::class, 'delete'])->name('delete');
// });

// // Lab 2

// Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
//     Route::get('listProduct', [ProductController2::class, 'listProduct'])->name('listProduct');

//     Route::get('addProduct', [ProductController2::class, 'viewAdd'])->name('viewAdd');
//     Route::post('addProduct', [ProductController2::class, 'addProduct'])->name('addProduct');

//     Route::get('updateProduct/{id}', [ProductController2::class, 'viewUpdate'])->name('viewUpdate');
//     Route::post('updateProduct/{id}', [ProductController2::class, 'updateProduct'])->name('updateProduct');

//     Route::get('delete/{id}', [ProductController2::class, 'delete'])->name('delete');

//     Route::post('search', [ProductController2::class, 'search'])->name('search');
// });

// Route::get('test', function () {
//     return view('admin.products.list');
// });

Route::get('login', [AuthenController::class, 'login'])->name('login');
Route::post('login', [AuthenController::class, 'postLogin'])->name('postLogin');

Route::get('register', [AuthenController::class, 'register'])->name('register');
Route::post('register', [AuthenController::class, 'postRegister'])->name('postRegister');

Route::get('logout', [AuthenController::class, 'logout'])->name('logout');

// CRUD product
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function () {
    Route::group([
        'prefix' => 'product',
        'as' => 'products.'
    ], function () {
        Route::get('/', [ProductController::class, 'listProduct'])->name('listProduct');
        Route::get('addProduct', [ProductController::class, 'addPr'])->name('addPr');
        Route::post('addProduct', [ProductController::class, 'addPostProduct'])->name('addPostProduct');

        Route::get('detail/{idProduct}', [ProductController::class, 'detailProduct'])->name('detailProduct');

        Route::get('update/{idProduct}', [ProductController::class, 'updateProduct'])->name('updateProduct');
        Route::patch('update/{idProduct}', [ProductController::class, 'updatePath'])->name('updatePath');


        Route::delete('delete', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    });
});
Route::group(['prefix' => 'user', 'as' => 'users.'], function () {
    Route::get('dashboard', [DashboarController::class, 'dashboard'])->name('dashboard');

    Route::post('search-product', [DashboarController::class, 'searchProduct'])->name('searchProduct');

    Route::get('deatil-product', [DashboarController::class, 'deatilProduct'])->name('deatilProduct');
});
