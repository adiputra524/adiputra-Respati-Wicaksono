<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   function getUser(Request $request){
       $nama = $request->nama;
       $umur = $request->email;
       $password= $request->Password;
       $confirm_Password = $request->getPassword();
       $profile_picture = $request->profile_Picture;
       $gender = $request->gender;
       $date_of_birth = $request->date_of_birth;
       $address = $request->address;
   }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
