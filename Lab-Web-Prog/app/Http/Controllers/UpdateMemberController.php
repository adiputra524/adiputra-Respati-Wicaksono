<?php

namespace App\Http\Controllers;

use\app\Member;
use Illuminate\Http\Request;

class UpdateMemberController extends Controller
{
    public function UpdateMember_index()
    {
        return view('layouts/UpdateMember');
    }

    public function validator(Request $request)
    {
        $data = $request->all();

        return Validator::make($data, [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'profile_picture' => 'required|image',
            'gender' => 'required',
            'date_of_birth' => 'require|yyy-MM-dd|min:10',
            'address' => 'required'
        ]);
    }

    public function UpdateMember_create(array $data)
    {
        return Member::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'profile_picture' => $data['picture']->getClientOriginalName(),
            'date_of_birth' => $data['date'],
            'address' => $data['address'],
            'gender' => $data['gender']


        ]);

    }
}
