<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;

class InsertMemberController extends Controller
{

  

    public function InsertMember_index(){
        return view('layouts/InsertMember');
    }
    public function validator(Request $request)
    {
        $data = $request->all();

        return Validator::make($data, [
            // 'name' => 'required|string|min:3',
            // 'email' => 'required|string|email|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
            // 'profile_picture'=> 'required|image',
            // 'gender'=> 'required',
            // 'date_of_birth'=> 'required|yyy-MM-dd|min:10',
            // 'address'=>'required|min:10'
        ]);
    }
    public function InsertMember_create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'profile_picture'=> $data['picture']->getClientOriginalName(),
            'date_of_birth'=> $data['date'],
            'address'=> $data['address'],
            'gender'=>  $data['gender']


        ]);




    }
}
