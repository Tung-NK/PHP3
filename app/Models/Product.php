<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Bắt buộc phải có

    // public $primaryKey = 'id'; // Mặc định là id nên không cần khai báo
    // public $incrementing = true; // Tự động tăng, nếu primary không phải số thì đặt false
    // public $timestamps = true; // Nếu không muốn ghi created_at và updated_at thì đặt false
    // protected $attributes = [
    //     'name' => 'abc',
    //     'email' => 'abc@gmail.com'
    // ]; // dữ liệu default khi insert | update
    // protected $fillable = [
    //     'id', 'name', 'price', 'view'
    // ]; // Các cột được tương tác trong table, muốn lấy tất thì không cần khai báo

}
