<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class updateController extends Controller
{
    public function update(){
        return view('Update');
    }

    public function Updates(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile_picture = $request->picture;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date;
        $user->address = $request->address;


        $user->save();

        return redirect('/home');


//        'name' => $data['name'],
//            'email' => $data['brand'],
//
//            //'profile_picture'=> $data['picture']->getClientOriginalName(),
//            'date_of_birth'=> $data['date'],
//            'address'=> $data['address'],
//            'gender'=>  $data['gender']


    }
}

