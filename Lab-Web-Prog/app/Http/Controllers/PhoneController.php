<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;


class PhoneController extends Controller
{
    protected $redirectTo = '/home';

    public function adminInsertPhone(){
        return view("insertPhone");
    }

    //insert
    public function adminStorePhone(Request $request) {
//        $request->validate([
//            "item_name" => "required| min:3|unique:item_table_detail",
//            "brand_id" =>"required",
//            "picture"=>"required|image",
//            "Description"=>"required",
//            "price"=>"required|numeric|min:1000",
//            "discount"=>"required",
//            "stock"=>"required"
//        ]);

        $item = new Item;
//        $request->input("name,brand,Description,Price,Price,Discount,Stock");

        $item->item_name = $request->name;
        $item->brand_id= $request->brand;
        $item->picture =$request->file('picture')->getClientOriginalName();
        $item->description = $request->Description;
        $item->price = $request->Price;
        $item->discount = $request->Discount;
        $item->stock = $request->Stock;
        $item->save();

        return view("phoneLists ");

    }

    //update
    public function UpdatePhone(Request $request){
        $item = Item::find($request->id);

        $item->item_name = $request->input("name");
        $item->brand_id = $request->input("brand");
        $item->pictture =$request->file('picture')->getClientOriginalName();
        $item->description = $request->input('Description');
        $item->price = $request->input('Price');
        $item->disscount = $request->input('Discount');
        $item->stock = $request->input('Stock');
        $item->save();


    }

    public function getData(){
       $posts=Item::All();

        return view('phoneLists')->with('posts', $posts);
    }
}
