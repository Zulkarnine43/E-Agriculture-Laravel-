<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=['f_username','c_username','crop_id','name','email','phone','amount','address','division','zip','status','transaction_id','currency'];
}
