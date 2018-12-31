<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item_table_detail";
    protected $primaryKey ='item_id';
       protected $fillable =[
           'item_name','price','discount','stock','brand_id','picture'
       ];

}
