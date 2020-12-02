<?php

namespace App\Http\Controllers;

use App\Bid_message;
use App\contact_message;
use App\crop_import;
use App\farmer_register;
use App\news_info;
use App\pay_confirm_message;
use App\user_register;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class homeController extends Controller
{
    //
    public function index(){

        $date=new Carbon();

        $allCrops=crop_import::all();
        foreach ($allCrops as $Crops) {
            $olddate=$Crops->last_date_bidding;
            if($date->greaterThan($olddate)){
                $Crops->condition="old";
                $Crops->save();
            }
        }


        $crops= crop_import::where('Action',"Active")->orderBy('created_at', 'desc')->get();
        return view('home.index',compact('crops'));
    }

       public function Categories($crop_type){
        $crops=crop_import::where('crop_type',$crop_type)->get();
        return view('home.categories',compact('crops'));
    }

        public function signup(){
        return view('home.signup');
    }

    public function login(){
    return view('home.login');
}

    public function services(){
  
        return view('home.services');
    }
    public function about(){
        return view('home.about_us');
    }
     public function contact(){
        return view('home.contact');
    }

    public function contact_message(Request $request){

        $regis = new contact_message();
        $regis->name = $request->name;
        $regis->email = $request->email;
        $regis->phone = $request->phone;
        $regis->message = $request->message;
        $regis->save();
        return redirect('/')->with('msg','your message send successfully');

    }

        public function crop_details($id){
         $crop=crop_import::find($id);
         $crop->views= $crop->views+1;
         $crop->save();
         $bids_msg=Bid_message::where('crop_id',$id)->get();
        return view('home.crop_details',['crop'=>$crop,'bids_msg'=>$bids_msg]);
    }

        public function cust_profile($c_username){
         $bids_crop=Bid_message::where('cust_username',$c_username)->distinct()->get(['crop_id']);
        return view('home.customer_profile',compact('bids_crop'));
         }

             public function c_message(){
        $pay_confirms=pay_confirm_message::where('cust_username',Session::get('c_username'))->get();
//        return $pay_confirms=crop_import::where('id',$pay_confirms->crop_id)->first();
        return view('home.c_message',compact('pay_confirms'));
    }

    public function search(Request $request){
        $search_tx1= $request->search;

        $search=crop_import::orderBy('id','desc')
            ->where('crop_name','Like','%'.$search_tx1.'%')
            ->orwhere('crop_type','Like','%'.$search_tx1.'%')
            ->orwhere('crop_location','Like','%'.$search_tx1.'%')
            ->orwhere('bid_rate','Like','%'.$search_tx1.'%')
            ->get();
            return view('home.search', ['s' => $search]);
    }


}
