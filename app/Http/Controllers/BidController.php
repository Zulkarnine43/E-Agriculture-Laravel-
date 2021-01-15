<?php

namespace App\Http\Controllers;

use App\Bid_message;
use App\crop_import;
use App\farmer_register;
use App\pay_confirm_message;
use App\pay_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BidController extends Controller
{
    //

    public function Bid_model($id){
        $crop=crop_import::find($id);
        $owners =Bid_message::where('crop_id', $crop->id)->max('bid_price');
        return view('home.Bid_model',compact('crop'),compact('owners'));
    }

    public function bid_msg_save(Request $request)
    {
        $this->validate($request,[
        ]);
        if($request->message==null){
            $request->message="null";
        }

        $regis = new Bid_message();
        $regis->crop_id = $request->crop_id;
        $regis->crop_name = $request->crop_name;
        $regis->f_username = $request->f_username;
        $regis->cust_username = $request->cust_username;
        $regis->name = $request->name;
        $regis->bid_price = $request->bid_price;
        $regis->message = $request->message;
        $regis->save();

        $farm=farmer_register::where('username',$request->f_username)->first();

        $data=$regis->toArray();

         $data2=$farm->toArray();

        // Mail::send('farmer.Bid_notification',['val'=>$data],function($message) use ($data2){
        //     $message->to($data2['email']);
        //     $message->subject('Bid_notification');
        // });

        return redirect('/')->with('msg','your bid send successfully');


    }


     public function bid_msg_saved(Request $request)
    {
        $this->validate($request,[
        ]);
        if($request->message==null){
            $request->message="null";
        }

        $regis = new Bid_message();
        $regis->crop_id = $request->crop_id;
        $regis->crop_name = $request->crop_name;
        $regis->f_username = $request->f_username;
        $regis->cust_username = $request->cust_username;
        $regis->name = $request->name;
        $regis->bid_price = $request->bid_price;
        $regis->message = $request->message;
        $regis->save();

        $farm=farmer_register::where('username',$request->f_username)->first();

        $data=$regis->toArray();

         $data2=$farm->toArray();

        // Mail::send('farmer.Bid_notification',['val'=>$data],function($message) use ($data2){
        //     $message->to($data2['email']);
        //     $message->subject('Bid_notification');
        // });
         return redirect()->route('crop_details',['id'=>$request->crop_id])->with('msg','your bid send successfully');;
    }
    

    public function pay_confirm_message(Request $request)
    {
        $this->validate($request,[
        ]);
        if($request->message==null){
            $request->message="null";
        }

        $regis = new pay_confirm_message();
        $regis->crop_id = $request->crop_id;
        $regis->f_username = $request->f_username;
        $regis->crop_name = $request->crop_name;
        $regis->cust_username = $request->cust_username;
        $regis->account_pay = $request->account_pay;
        $regis->confirm_price = $request->confirm_price;
        $regis->message = $request->message;
        $regis->save();
        return redirect('/')->with('msg','your confirm message send successfully');

    }


        public function bid_delete($id ,$crop_id){

         $bid_delete=Bid_message::find($id);
         $bid_delete->delete();
       
         $crop=crop_import::where('id',$crop_id)->first();
         $bids_msg=Bid_message::where('crop_id',$crop_id)->get();

        return view('home.crop_details',['crop'=>$crop,'bids_msg'=>$bids_msg])->with('msg','bid deleted successfully');
    }

}
