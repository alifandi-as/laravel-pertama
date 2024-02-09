<?php

namespace App\Http\Controllers\Api;

use App\Helpers\JwtToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class ApiAuthController extends ApiController
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $secretApiKey = $request->header('authorization');
        /**
         * 1. Check data by email ke tabel user
         * 2. check password sesuai atau tidak
         * 3. cek secret api key
         * 4. jika lolos semua, bautkan access token
         */

         $token = JwtToken::setData([
            'email' => $email,
            'id' => 1,
            'role_id' => 1, 
            'data_lain' => 'asdasa'
         ])->setExpired('+1 minutes')->build();
        return $this->sendSuccess($token);
    }

    public function logout(Request $request){
        JwtToken::blacklist();
        return $this->sendSuccess('oke');
    }
}
