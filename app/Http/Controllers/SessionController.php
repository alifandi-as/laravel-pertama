<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function getSession(Request $request){
        $name = $request->input('name');

        $session = Session::get($name);

        return response()->json(['name' => $name, 'value' => $session]);
    }

    public function setSession(Request $request){
        $name = $request->input('name');
        $value = $request->input('value');

        Session::put($name, $value);

        return response()->json(['name' => $name, 'value' => $value]);
    }
}
