<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;

class update_brand_controller extends Controller
{
    public function updateBrand(){
        return view("UpdateBrand")->with("brands", brand::all());
    }
}
