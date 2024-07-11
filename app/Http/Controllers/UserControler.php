<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserControler extends Controller
{
    public function listUser()
    {
        $listUser = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'users.tuoi',
                'phongban.id as idPhongban',
                'phongban.ten_donvi'
            )
            ->get();

        return view('user/list')->with([
            'data' => $listUser
        ]);
    }

    public function viewAdd()
    {
        $phongban = DB::table('phongban')->get();

        return view('user/add')->with([
            'phongban' => $phongban
        ]);
    }

    public function addUser(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($data);

        return redirect()->route('user.listUser');
    }

    public function detail($id)
    {
        $oneUser = DB::table('users')->where('id', '=', $id)->first();
        $phongban = DB::table('phongban')->get();

        return view('user/update')->with([
            'oneUser' => $oneUser,
            'phongban' => $phongban
        ]);
    }

    public function update(Request $req, $id)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->where('id', '=', $id)->update($data);
        return redirect()->route('user.listUser');
    }

    public function delete($id){
        DB::table('users')-> where('id', $id) -> delete();
        return redirect()-> route('user.listUser');
    }
}
