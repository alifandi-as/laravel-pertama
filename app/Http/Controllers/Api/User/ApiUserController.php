<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class ApiUserController extends ApiController
{
    public function index(Request $request){
        $userList = []; // ini nanti ambil data dari database

        return $this->sendMessage($userList, "pesannya begini");
    }

    public function show(Request $request){
        
    }

    public function store(Request $request){
        
    }
    
    public function update(Request $request){
        
    }

    public function destroy(Request $request){
        
    }
}
