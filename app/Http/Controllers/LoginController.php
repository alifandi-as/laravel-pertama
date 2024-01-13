<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public static function store($name, $password){
        // Session::put(["name", $name], ["password", $password]);
        Session::put("name", $name);
        Session::put("password", $password);
        echo "Login berhasil. Anda login sebagai $name";
    }
    public static function delete(){
        Session::forget(["name", "password"]);
        echo "Anda telah logout";
    }
    public static function index(){
        $listUser = UserData::all();
        return $listUser;
    }
    public static function name(){
        $listUser = UserData::query()
        ->select(['name'])
        ->get();
        return $listUser;
    }
}
