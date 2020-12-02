<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_register extends Model
{
    //
    protected $fillable=['username','email','mobile','division','password','password_confirm','profile_pic','condition'];
}
