<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'name' => 'required|string|min:3',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:5|confirmed',
//            'profile_picture'=> 'required|image',
//            'gender'=>'required',
//            'date_of_birth'=>'required|mm-dd-yyy',
//            'address'=>'required|min:10'
        ]);
    }

   // $request->all();

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
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
