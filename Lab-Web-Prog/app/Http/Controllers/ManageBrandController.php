<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;

class ManageBrandController extends Controller
{
    public function manageBrand(){
        return view("ManageBrand")->with("brands", brand::all());
    }
}
