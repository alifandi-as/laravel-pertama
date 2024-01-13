<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $listUser = User::query()
            ->select(['id', 'name', 'phone', 'email', 'address'])
            // ->orderBy('id', 'desc')
            // ->where('id', "=", 1)
            ->latest('id')
            ->get();
            echo "ELOQUENT\n\n";
            return $listUser;
    }

    public function index_qb(){
        $listUser = DB::table("users")
        ->select(['id', 'name', 'phone', 'email', 'address'])
        ->latest("id")
        ->get();
        echo "QUERY BUILDER\n\n";
            // $sql = "select id, name, phone, email, address from usrs where id=1 order by id desc"
            return $listUser;
    }

    public function create(){
        User::create([
            'name' => 'Lailil Mahfud',
            'password' => '123456',
            'phone' => '085111111',
            'email' => 'email@gmail.com',
            'address' => 'Jepara'
        ]);
        return 'CREATE ELOQUENT';
    }

    public function create_qb(){
        DB::table("users")->insert([
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'name' => 'Lailil Mahfud',
            'password' => '123456',
            'phone' => '085111111',
            'email' => 'email@gmail.com',
            'address' => 'Jepara'
        ]);
        return 'CREATE QUERY BUILDER';
    }

    public function update(){
        User::query()
        ->latest("id")
        ->take(1)
        ->update([
            'name' => 'Muhammad Lailil'
        ]);

        return 'UPDATE ELOQUENT';
    }

    public function update_qb(){
        DB::table("users")
        ->latest("id")
        ->take(1)
        ->update([
            'updated_at' => date("Y-m-d H:i:s"),
            'name' => 'Muhammad Lailil'
        ]);

        return 'UPDATE QUERY BUILDER';
    }

    public function delete(){
        User::query()
        ->latest("id")
        ->take(1)
        ->delete();

        return "DELETE ELOQUENT";
    }

    public function delete_qb(){
        DB::table("users")
        ->latest("id")
        ->take(1)
        ->delete();

        return "DELETE QUERY BUILDER";
    }
}
