<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagePhone extends Controller
{
    public function ManagePhone(){


        return view('ManagePhone');
    }

    public function insertPhone_create(array $data){

        return item_table_detail::create([

        ]);
    }
}
