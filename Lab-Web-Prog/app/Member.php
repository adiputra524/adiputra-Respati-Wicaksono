<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name', 'email', 'password','profile_picture','date_of_birth','address','gender'
    ];

}
