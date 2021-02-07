<?php

namespace App\Http\Controllers;

use App\Bid_message;
use App\user_register;
use App\pay_confirm_message;
use App\farmer_register;
use App\order;
use App\pay_order;
use Illuminate\Http\Request;
use PDF;

class invoiceController extends Controller
{


public function bids_download_invoice($id){
        $Bid=Bid_message::find($id);
        $username=$Bid->cust_username;
        $user=user_register::where('username',$username)->first();
        $pdf = PDF::loadView('farmer.bids_download_invoice',['Bid'=>$Bid,'user'=>$user]);
        return $pdf->stream('invoice.pdf');
    }

public function pay_confirm_download_invoice($id){
        $msg=pay_confirm_message::find($id);
        $Bid=Bid_message::where('crop_id',$msg->crop_id)->first();
        $username=$Bid->f_username;
        $user=farmer_register::where('username',$username)->first();
        $pdf = PDF::loadView('home.pay_confirm_invoice',['msg'=>$msg,'Bid'=>$Bid,'user'=>$user]);
        return $pdf->stream('invoice.pdf');
    }
}
