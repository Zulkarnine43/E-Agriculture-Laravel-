<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    //

   public function manually_payment(Request $request){
               $update_product = DB::table('orders')
            ->updateOrInsert([
                'f_username' => $request['f_username'],
                'c_username' => $request['c_username'],
                'crop_id' => $request['crop_id'],
                'name' => $request['customer_name'],
                'email' => $request['customer_email'],
                'phone' => $request['customer_mobile'],
                'amount' => $request['amount'],
                'status' => 'Processing',
                'address' => $request['address'],
                'division' => $request['division'],
                'zip' => $request['zip'],
                'transaction_id' => $request['transaction_id'],
                'currency' => 'BDT'
            ]);

            return redirect()->back()->with('msg','payment_information send successfully');
    }

  public function farm_order_messages(){
        $orders=order::where('f_username',Session::get('f_username'))->orderBy('created_at','desc')
        ->get();
        return view('farmer.orders_info',compact('orders'));
    }

 public function cust_order_messages(){
        $orders=order::where('c_username',Session::get('c_username'))->orderBy('created_at','desc')->get();
        return view('home.orders_info',compact('orders'));
    }
}
