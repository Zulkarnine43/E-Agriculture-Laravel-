<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farmer_register extends Model
{
    //
    protected $fillable=['register_as','username','email','mobile','division','zip_code','password','password_confirm','profile_pic','action','condition'];
}
