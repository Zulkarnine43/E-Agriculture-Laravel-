<?php

namespace App\Http\Controllers;

use App\Bid_message;
use App\crop_import;
use App\farmer_register;
use App\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class farmerController extends Controller
{
    //
    public function f_home(){
        $crops=crop_import::where('username',Session::get('f_username'))->get();
        return view('farmer.index',compact('crops'));
    }

    public function crop_import(){
        return view('farmer.crop_import');
    }


    public function crop_manage(){
        $crops=crop_import::where('Action',"Published")->orWhere('Action',"Unpublished")->get();
        return view('farmer.manage_crops',compact('crops'));
    }

    public function edit_crop($id){
        $crop=crop_import::find($id);
        return view('farmer.edit_crop',compact('crop'));
    }

    public function delete_crop($id){
        $crop=crop_import::find($id);
        $crop->Action="deleted";
        $crop->save();
        return redirect('/crop/manage')->with('msg','delete crop successfully');
    }


    // public function user_manage(){
    //      $users=user_register::all();
    //     return view('farmer.customer_information',compact('users'));
    // }

       public function farm_bid_messages(){
        $messages=Bid_message::where('f_username',Session::get('f_username'))->orderBy('created_at','desc')->get();
        return view('farmer.f_message',compact('messages'));
           }


   public function fa_profile($f_username){
        $crops=crop_import::where('username',$f_username)->where('Action','!=',"deleted")->get();
        return view('farmer.farmer_profile',compact('crops'));
    }


        public function f_settings(){
        $user=farmer_register::where('username',Session::get('f_username'))->first();
        return view('farmer.f_settings',compact('user'));
         }


    public function farmerRegisterUpdate(Request $request){
             $this->validate($request,[
         
                'mobile'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
            ]);


                if ($request->profile_image!=null) {
                $profileImage = $request->file('profile_image');
                if ($profileImage) {
                    $imageName = time().'.'.$profileImage->getClientOriginalName();
                    $directory = 'public/profile_images/';
                    $imageUrl = $directory . $imageName;
                    $profileImage->move($directory, $imageName);

                }
            }
            
            $regis=farmer_register::where('id',$request->id)->first();
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->zip_code = $request->zip_code;
            $regis->gender = $request->gender;
            if ($request->profile_image!=null) {
                $regis->profile_pic = $imageUrl;
            }
            
            $regis->save();
            return redirect('/farmer')->with('msg','update Successfully');
        }
      
    // public function upload_profile(Request $request){

    //     $Image = $request->file('profile_image');
    //     if ($Image) {
    //         $imageName = $Image->getClientOriginalName();
    //         $directory = 'public/profile_images/';
    //         $imageUrl = $directory . $imageName;
    //         $Image->move($directory, $imageName);

    //     }

    //     $image=farmer_register::where('username',Session::get('f_username'))->first();
    //     $image->profile_pic=$imageUrl;
    //     $image->save();
    //     return redirect('/farmer/home/page');
    // }

    public function logout($name){

        if($name=="c_username"){
              Session::forget('c_username');
             if(!Session::has('c_username')){
            return redirect('/')->with('l_msg','logout successfully');
        }
    }

     if($name=="f_username"){
              Session::forget('f_username');
             if(!Session::has('f_username')){
            return redirect('/')->with('l_msg','logout successfully');
        }
    }else{
            Session::forget('a_username');
             if(!Session::has('a_username')){
            return redirect('/admin/login')->with('l_msg','logout successfully');
    }
}

}

}