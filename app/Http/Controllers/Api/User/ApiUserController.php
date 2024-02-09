<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class ApiUserController extends ApiController
{
    public function index(Request $request){
        $userList = User::query()
            ->select(['id', 'name', 'phone', 'email', 'address'])
            // ->orderBy('id', 'desc')
            // ->where('id', "=", 1)
            ->latest('id')
            ->get();

        return $this->sendSuccess($userList, "Ini daftar user yang terdaftar:");
    }

    public function show(Request $request, $id){
        $userList = User::query()
            ->select(['id', 'name', 'phone', 'email', 'address'])
            // ->orderBy('id', 'desc')
            // ->where('id', "=", 1)
            ->where('id', $id)
            ->first();

        return $this->sendSuccess($userList, "Inilah user ber-id yang disediakan:");
    }

    public function store(Request $request){
       $userList =  User::create([
            'name' => 'Lailil Mahfud',
            'password' => '123456',
            'phone' => '085111111',
            'email' => 'email@gmail.com',
            'address' => 'Jepara'
        ]);

        return $this->sendSuccess($userList, "Inilah user yang ditambahkan:");
    }
    
    public function update(Request $request){
        $userList = User::query()
        ->latest("id")
        ->take(1)
        ->update([
            'name' => 'Muhammad Lailil'
        ]);

        return $this->sendMessage("User berhasil diupdate");
    }

    public function destroy(Request $request){
        $userList = User::query()
        ->latest("id")
        ->take(1)
        ->delete();

        return $this->sendMessage("User berhasil dihapus");
    }
}
