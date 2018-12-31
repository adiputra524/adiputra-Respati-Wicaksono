<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $credentials = [
            'email' => $request ->email,
            'password' => $request ->password,
        ];
        if($request->remember){
            cookie::queue('crendentials',$credentials,60);
        }
    }
}
