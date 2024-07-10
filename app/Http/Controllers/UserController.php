<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers()
    {
        $data = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
            ->select('users.name', 'users.email', 'users.tuoi', 'phongban.ten_donvi', 'users.id')
            ->get();

        return view('users/list-users')->with([
            'listUsers' => $data
        ]);
    }

    public function viewAdd()
    {
        // echo '124';
        $phongban = DB::table('phongban')
            ->select('id', 'ten_donvi')
            ->get();
        return view('users/add-users')->with([
            'phongban' => $phongban
        ]);
    }

    public function add(Request $req)
    {
        $data = [
            'name' => $req->name, //$req -> name ~ $_POST['name']
            'email' => $req->email, //$req -> name ~ $_POST['name']
            'phongban_id' => $req->phongban, //$req -> name ~ $_POST['name']
            'tuoi' => $req->tuoi, //$req -> name ~ $_POST['name']
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($data);

        return redirect()->route('users.list');
    }
}
