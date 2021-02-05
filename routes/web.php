<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Start Admin page routing

// Start Admin RegisterLoginCheckController Routing


Route::get('/admin/signup',[
    'uses' =>'adminController@admin_signup',
    'as' =>'admin_signup'
]);


Route::post('admin/signup/save',[
    'uses' =>'adminLoginController@admin_registerSave',
    'as' =>'admin_registerSave'
]);

Route::get('/account_verify/{username}',[
    'uses' =>'adminLoginController@admin_account_verify',
    'as' =>'admin_account_verify'
]);

Route::get('/admin/login',[
    'uses' =>'adminController@a_login',
    'as' =>'a_login'
]);

Route::post('admin/login/check',[
    'uses' =>'adminLoginController@admin_login_check',
    'as' =>'admin_login_check'
]);


Route::post('/admin_pw_change_link',[
    'uses' =>'adminLoginController@admin_pw_change_link',
    'as' =>'admin_pw_change_link'
]);

Route::get('/admin_pw_change/{email}',[
    'uses' =>'adminLoginController@admin_pw_change',
    'as' =>'admin_pw_change'
]);


Route::post('/admin_pass_change_save/{email}',[
    'uses' =>'adminLoginController@admin_pass_change_save',
    'as' =>'admin_pass_change_save'
]);


Route::post('/admin/registerUpdate',[
    'uses' =>'adminLoginController@adminregisterUpdate',
    'as' =>'adminregisterUpdate'
]);
// End Admin RegisterLoginCheckController Routing

// Start Admin home Routing
Route::get('/admin/home',[
    'uses' =>'adminController@a_home',
    'as' =>'a_home'
]);
Route::get('/farmers',[
    'uses' =>'adminController@all_farmer',
    'as' =>'all_farmer'
]);

Route::get('/customers',[
    'uses' =>'adminController@all_customer',
    'as' =>'all_customer'
]);

Route::get('/farmer/{id}',[
    'uses' =>'adminController@f_action',
    'as' =>'f_action'
]);

Route::get('/customer/{id}',[
    'uses' =>'adminController@c_action',
    'as' =>'c_action'
]);

Route::get('farmerr/profile/{id}',[
'uses'=>'adminController@farmer_profile',
'as'=>'farmer_profile'
]);

Route::get('user/profile/{id}',[
'uses'=>'adminController@user_profile',
'as'=>'user_profile'
]);


Route::get('user/details/{id}',[
'uses'=>'adminController@user_details',
'as'=>'user_details'
]);


Route::get('/published/crop',[
    'uses' =>'adminController@published_crops',
    'as' =>'published_crops'
]);

Route::get('/crop/unpublished/{id}',[
    'uses' =>'adminController@crop_unpublished_save',
    'as' =>'crop_unpublished_save'
]);


Route::get('/unpublished/crop',[
    'uses' =>'adminController@unpublished_crops',
    'as' =>'unpublished_crops'
]);

Route::get('/crop/published/{id}',[
    'uses' =>'adminController@crop_published_save',
    'as' =>'crop_published_save'
]);


Route::get('/deleted/crop',[
    'uses' =>'adminController@deleted_crops',
    'as' =>'deleted_crops'
]);

Route::get('/crop/deleted/{id}',[
    'uses' =>'adminController@crop_delete',
    'as' =>'crop_delete'
]);

Route::get('/add/Categories',[
    'uses' =>'adminController@add_categories',
    'as' =>'add_categories'
]);

Route::post('/categories/save',[
    'uses' =>'adminController@save_categories_db',
    'as' =>'save_categories_db'
]);

Route::get('/manage/categories',[
    'uses' =>'adminController@manage_categories',
    'as' =>'manage_categories'
]);

Route::get('/change/categories/status/{id}',[
    'uses' =>'adminController@categories_status',
    'as' =>'categories_status'
]);

Route::get('/categories/delete/{id}',[
    'uses' =>'adminController@categories_delete',
    'as' =>'categories_delete'
]);

Route::get('/add/news',[
    'uses' =>'adminController@add_news',
    'as' =>'add_news'
]);

Route::post('/news/save',[
    'uses' =>'adminController@save_news_db',
    'as' =>'save_news_db'
]);


Route::get('/manage/news',[
    'uses' =>'adminController@manage_news',
    'as' =>'manage_news'
]);

Route::get('/edit/news/{id}',[
    'uses' =>'adminController@edit_news',
    'as' =>'edit_news'
]);

Route::post('/news/update',[
    'uses' =>'adminController@update_news_db',
    'as' =>'update_news_db'
]);

Route::get('/delete/news/{id}',[
    'uses' =>'adminController@delete_news',
    'as' =>'delete_news'
]);


Route::get('/admin/profile',[
    'uses' =>'adminController@a_profile',
    'as' =>'a_profile'
]);

Route::get('/admin/settings',[
    'uses' =>'adminController@a_settings',
    'as' =>'a_settings'
]);


// End Admin home Routing
// End Admin page routing


// Start home page routing
Route::get('/',[
'uses'=>'homeController@index',
'as'=>'home'
]);


Route::get('/contact',[
    'uses' =>'homeController@contact',
    'as' =>'contact'
]);

Route::get('/services',[
    'uses' =>'homeController@services',
    'as' =>'services'
]);

Route::get('/about',[
    'uses' =>'homeController@about',
    'as' =>'about'
]);

Route::get('/gallery',[
    'uses' =>'homeController@gallery',
    'as' =>'gallery'
]);




// Start RegisterLoginCheckController Routing

Route::get('/signup',[
    'uses' =>'homeController@signup',
    'as' =>'signup'
]);

Route::post('signup/save',[
    'uses' =>'RegisterLoginCheckController@registerSave',
    'as' =>'registerSave'
]);

Route::get('/login',[
    'uses' =>'homeController@login',
    'as' =>'login'
]);


Route::post('login/check',[
    'uses' =>'RegisterLoginCheckController@login_check',
    'as' =>'login_check'
]);

Route::get('/account_verify/{username}/{uses_as}',[
    'uses' =>'RegisterLoginCheckController@account_verify',
    'as' =>'account_verify'
]);

Route::post('/pw_change_link',[
    'uses' =>'RegisterLoginCheckController@pw_change_link',
    'as' =>'pw_change_link'
]);

Route::get('/pw_change/{uses}/{email}',[
    'uses' =>'RegisterLoginCheckController@pw_change',
    'as' =>'pw_change'
]);


Route::post('/pass_change_save/{uses_as}/{email}',[
    'uses' =>'RegisterLoginCheckController@pass_change_save',
    'as' =>'pass_change_save'
]);

// End RegisterLoginCheckController Routing

Route::get('/categories/{crop_type}',[
    'uses' =>'homeController@Categories',
    'as' =>'Categories'
]);

Route::get('/sessions/categories/{crop_type}/{crop_session}',[
    'uses' =>'homeController@Session_Categories',
    'as' =>'Session_Categories'
]);

Route::get('/crop_details/{id}',[
    'uses' =>'homeController@crop_details',
    'as' =>'crop_details'
]);

Route::get('/customer/profile/{c_username}',[
    'uses' =>'homeController@cust_profile',
    'as' =>'cust_profile'
]);

Route::get('/pay/message',[
    'uses' =>'homeController@c_message',
    'as' =>'c_message'
]);


Route::get('/customer',[
    'uses' =>'homeController@c_settings',
    'as' =>'c_settings'
]);

Route::post('/customer/registerUpdate',[
    'uses' =>'homeController@customerRegisterUpdate',
    'as' =>'customerRegisterUpdate'
]);


Route::get('/search',[
    'uses' =>'homeController@search',
    'as' =>'search'
]);

Route::get('/customer/wishlist/save/{id}',[
    'uses' =>'wishlistController@wishlist_db',
    'as' =>'wishlist_db'
]);


Route::get('/customer/wishlist/{c_username}',[
    'uses' =>'wishlistController@wishlist',
    'as' =>'wishlist'
]);

Route::get('/wishlist/remove/{id}',[
    'uses' =>'wishlistController@wishlist_remove',
    'as' =>'wishlist_remove'
]);

Route::get('/bid_details/download/invoices/{id}',[
    'uses' =>'invoiceController@bids_download_invoice',
    'as' =>'bids_download_invoice'
]);

Route::get('/Pay_Confirm/download/invoice/{id}',[
    'uses' =>'invoiceController@pay_confirm_download_invoice',
    'as' =>'pay_confirm_download_invoice'
]);

// End home page routing

//Start Group middleware
Route::group(['middleware' => 'f_check'], function () {

// Start Farmer page routing
Route::get('/farmer/home/page',[
    'uses' =>'farmerController@f_home',
    'as' =>'f_home'
]);

Route::get('/crop/import',[
    'uses' =>'farmerController@crop_import',
    'as' =>'crop_import'
]);

// Start Farmer Crop add update routing
Route::post('/crop/add/save',[
    'uses'=>'farm_CropController@add_product_db',
    'as'=>'add_product_db'
]);

Route::get('/crop/manage',[
    'uses' =>'farmerController@crop_manage',
    'as' =>'crop_manage'
]);

Route::get('/crop/edit/{id}',[
    'uses' =>'farmerController@edit_crop',
    'as' =>'edit_crop'
]);

Route::post('/crop/update/save',[
    'uses'=>'farm_CropController@update_product_db',
    'as'=>'update_product_db'
]);

Route::get('/crop/condition/{id}',[
    'uses' =>'farm_CropController@condition_crop',
    'as' =>'condition_crop'
]);

Route::get('/crop/delete/{id}',[
    'uses' =>'farmerController@delete_crop',
    'as' =>'delete_crop'
]);


// End Farmer Crop add update routing



// Route::get('/user/manage',[
//     'uses' =>'farmerController@user_manage',
//     'as' =>'user_manage'
// ]);

Route::get('/farmer/bid/messages',[
    'uses' =>'farmerController@farm_bid_messages',
    'as' =>'farm_bid_messages'
]);

Route::get('/farmer/profile/{f_username}',[
    'uses' =>'farmerController@fa_profile',
    'as' =>'fa_profile'
]);

Route::get('/farmer/',[
    'uses' =>'farmerController@f_settings',
    'as' =>'f_settings'
]);

Route::post('/farmer/registerUpdate',[
    'uses' =>'farmerController@farmerRegisterUpdate',
    'as' =>'farmerRegisterUpdate'
]);

Route::get('/logout/{name}',[
    'uses' =>'farmerController@logout',
    'as' =>'logout'
]);



});
//End Group middleware

// End farmer page routing


// Start Bid Modal routing
Route::get('/bid/model/{id}',[
    'uses' =>'BidController@Bid_model',
    'as' =>'Bid_model'
]);

Route::post('/Bid/message',[
    'uses' =>'BidController@bid_msg_save',
    'as' =>'bid_msg_save'
]);

Route::post('/Bid/message/save',[
    'uses' =>'BidController@bid_msg_saved',
    'as' =>'bid_msg_saved'
]);

Route::get('/bid/delete/{id}/{crop_id}',[
    'uses' =>'BidController@bid_delete',
    'as' =>'bid_delete'
]);

Route::post('/pay/confirm/message',[
    'uses' =>'BidController@pay_confirm_message',
    'as' =>'pay_confirm_message'
]);

// End Bid modal routing


// SSLCOMMERZ Start


Route::get('/example2/{id}/{crop_id}',[
    'uses' =>'SslCommerzPaymentController@exampleHostedCheckout',
    'as' =>'example2'
]);

Route::post('/pay', 'SslCommerzPaymentController@index');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END