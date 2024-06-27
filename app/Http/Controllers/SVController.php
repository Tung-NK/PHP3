<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SVController extends Controller
{
    public function getSV()
    {
        $sinhVien = [
            'name' => 'Nguyễn Khắc Tùng',
            'birthday' => '26/08/2004',
            'hometown' => 'Hà Nội',
            'specialized' => 'Lập trình web',
        ];

        return view('sinhvien') -> with(['data' => $sinhVien]);
    }
}
