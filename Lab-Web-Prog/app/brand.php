<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = "brand_table_detail";
    protected $primaryKey='brand_id';
    protected $fillable=[
        'brand_name'
];


}
