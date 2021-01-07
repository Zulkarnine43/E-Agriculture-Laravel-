<?php

namespace App\Http\Controllers;

use App\admin_register;
use App\contact_message;
use App\crop_import;
use App\farmer_register;
use App\news_info;
use App\user_register;
use App\Bid_message;
use App\categories_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    //

    public function a_login(){
        return view('admin.login');
    }

    public function admin_signup(){
        return view('admin.signup');
    }

        public function a_home(){
        $newses=news_info::all();
        return view('admin.index',compact('newses'));
    }

    public function all_farmer(){
        $users= farmer_register::all();
        return view('admin.all_farmer',compact('users'));
    }
    public function all_customer(){
        $users= user_register::all();
        return view('admin.all_customer',compact('users'));
    }

    public function published_crops(){
        $crops=crop_import::where('Action',"Published")->get();
        return view('admin.published_crops',compact('crops'));
    }
    public function unpublished_crops(){
    $crops=crop_import::where('Action',"Unpublished")->get();
    return view('admin.unpublished_crops',compact('crops'));
}

 
     public function crop_published_save($id){
        $crop=crop_import::find($id);
        $crop->Action="Published";
        $crop->save();
       return redirect('/unpublished/crop')->with('msg','Crop Published Successfully');
    }

       public function crop_unpublished_save($id){
        $crop=crop_import::find($id);
        $crop->Action="Unpublished";
        $crop->save();
       return redirect('/published/crop')->with('msg','Crop Unpublished Successfully');
    }

        public function deleted_crops(){
        $crops=crop_import::where('Action',"deleted")->get();
        return view('admin.deleted_crops',compact('crops'));
    }


    public function add_categories(){
        return view('admin.add_categories');
    }


   public function save_categories_db(Request $request){

        $categories = new categories_info();
        $categories->a_username = $request->a_username;
        $categories->categories_name = $request->categories_name;
        $categories->categories_description = $request->categories_description;
        $categories->categories_status = 1;
        $categories->save();
        return redirect('/admin/home')->with('msg','categories added successfully');
    }

     public function manage_categories(){
        $categories=categories_info::all();
        return view('admin.manage_categories',compact('categories'));
    }

      public function categories_status($id){
        $categories=categories_info::find($id);

       if($categories->categories_status==1){
        $categories->categories_status=0;
        $categories->save();
        return redirect('/manage/categories')->with('msg','categorie deactive successfully');
       }else{
         $categories->categories_status=1;
         $categories->save();
        return redirect('/manage/categories')->with('msg','categorie active successfully');
       }
    }

      public function categories_delete($id){
        $categories=categories_info::find($id);
        $categories->delete();
        return redirect('/manage/categories')->with('msg','categorie deleted successfully');
       }



    public function add_news(){
        return view('admin.add_news');
    }
    public function save_news_db(Request $request){

         $newsImage = $request->file('news_image');
        if ($newsImage) {
            $imageName = $newsImage->getClientOriginalName();
            $directory = 'public/news_images/';
            $imageUrl = $directory.$imageName;
            $newsImage->move($directory, $imageName);

        }

        $news = new news_info();
        $news->username = $request->username;
        $news->news_name = $request->news_name;
        $news->news_description = $request->news_description;
        $news->long_description = $request->long_description;
        $news->news_image = $imageUrl;
        $news->save();
        return redirect('/admin/home')->with('msg','news published successfully');
    }

    public function manage_news(){
        $newses=news_info::all();
        return view('admin.manage_news',compact('newses'));
    }


    public function edit_news($id){
        $news=news_info::find($id);
        return view('admin.edit_news',compact('news'));
    }

    public function update_news_db(Request $request){

        if($request->news_image!=null) {

            $newsImage = $request->file('news_image');
            if ($newsImage) {
                $imageName = $newsImage->getClientOriginalName();
                $directory = 'news_images/';
                $imageUrl = $directory . $imageName;
                $newsImage->move($directory, $imageName);

            }
        }

        $news= news_info::where('id',$request->id)->first();
        $news->username = $request->username;
        $news->news_name = $request->news_name;
        $news->news_description = $request->news_description;
        $news->long_description = $request->long_description;
        if($request->news_image!=null) {
            $news->news_image = $imageUrl;
        }
        $news->save();
        return redirect('/manage/news')->with('msg','news Update successfully');
    }


    public function delete_news($id){
        $news=news_info::find($id);
        $news->delete();
        return redirect('/manage/news')->with('msg','news delete successfully');
    }

    public function manage_Comments(){
        $newses=contact_message::all();
        return view('admin.manage_Comments',compact('newses'));
    }

    public function comment_delete($id){
        $news=contact_message::find($id);
        $news->delete();
        return redirect('/manage/comments')->with('msg','comment delete successfully');
    }

    public function a_profile(){
        $newses=news_info::where('username',Session::get('a_username'))->get();
        return view('admin.a_profile',compact('newses'));
    }

    public function f_action($id){
        $farm=farmer_register::find($id);

        if($farm!=null) {
            if ($farm->action == "active") {
                $farm->action = "disable";
                $farm->save();
            } else {
                $farm->action = "active";
                $farm->save();
            }
            return redirect('/farmers');
        }
    }


   public function c_action($id){
        $cust=user_register::find($id);

        if($cust!=null) {
            if ($cust->action == "active") {
                $cust->action = "disable";
                $cust->save();
            } else {
                $cust->action = "active";
                $cust->save();
            }
            return redirect('/customers');
        }
    }




   public function farmer_profile($id){
         $user=farmer_register::find($id);
         Session::put('fa_login',$user->username);
         $crops=crop_import::where('username',$user->username)->get();
         return view ('admin.farmer_profile',compact('crops'));
    }



    public function user_profile($id){
         $user=user_register::find($id);
         Session::put('c_login',$user->username);
        $crops=Bid_message::where('cust_username',$user->username)->distinct()->get(['crop_id']);
         return view ('admin.user_profile',compact('crops'));
    }

        public function a_settings(){
        $user=admin_register::where('username',Session::get('a_username'))->first();
        return view('admin.a_settings',compact('user'));
         }

     public function user_details($id){
     $user=farmer_register::find($id);
     return view ('admin.user_details',compact('user'));
    }

}
