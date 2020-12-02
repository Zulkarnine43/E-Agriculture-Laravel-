<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay_confirm_message extends Model
{
    //
    protected $fillable=['crop_id','f_username','crop_name','cust_username','account_pay','confirm_price','message'];
}
