<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('list')->with([
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


    public function queryBuilder()
    {
        // 1. lấy danh sách toàn bộ user
        // $data = DB::table('users')->get();

        // 2. Lấy thông tin user có id = 4

        // $data = DB::table('users') -> where('id', '=', 4) ->first();
        // $data = DB::table('users') ->find('4');


        // 3. Lấy thuốc tính name của user có id = 16

        // $data = DB::table('users')->where('id', 16)
        //     ->value('name');


        // 4. Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');

        // $data = DB::table('users')->where('phongban_id', $idPhongBan)
        //     ->pluck('id');

        //  5. Tìm user có độ tuổi nhỏ nhất trong công ty
        // $data = DB::table('users')->where(
        //     'tuoi',
        //     DB::table('users')->max('tuoi')
        // )->get();

        //  6. Tìm user có độ tuổi nhỏ nhất trong công ty

        // $data = DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))->get();

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');

        // $data = DB::table('users')->where('phongban_id', $idPhongBan)->count();

        // 8. Lấy danh sách tuổi các user 
        // $data = DB::table('users') ->distinct() -> pluck('tuoi');

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $data = DB::table('users')->where('name', 'like', '%Khải')
        //     ->orWhere('name', 'like', '%Thanh')->get();

        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', 'Ban đào tạo')->value('id');

        // $data = DB::table('users')->where('phongban_id', $idPhongBan)
        //     ->get();

        // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $data = DB::table('users')->where('tuoi', '>=', '30')->orderBy('tuoi')->get();

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $data = DB::table('users')->orderBy('tuoi', 'desc')->offset(5)->limit(10)->get('tuoi');

        // dd($data);


        // 13. Thêm một user mới vào công ty
        $data = [
            'name' => 'KhacTung',
            'email' => 'tungnkph328828@fpt.edu.vn',
            'phongban_id' => 1,
            'songaynghi' => 1,
            'tuoi' => 20,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        // DB::table('users')-> insert($data);
        $idUser = DB::table('users')->insertGetId($data); // thêm dữ liệu trả về id dữ liệu vừa thêm mới
        $data = DB::table('users')->find($idUser);
        dd($data);

        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
        // $data = [

        // ]

        // DB::table('users')->where('songaynghi', '>', '15')->delete();
    }
}
