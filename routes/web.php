<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostController;  
use App\Http\Controllers\SuperAdminController;  

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

//_______________HomeController____________

Route::get("/",[HomeController::class,"index"]);
Route::get("/about",[HomeController::class,"about"]);
Route::get("/ananda",[HomeController::class,"ananda"]);
Route::get("/service",[HomeController::class,"service"]);
Route::get("/contact",[HomeController::class,"contact"]);
Route::get("/blog",[HomeController::class,"blog"]); 
Route::get("/home",[HomeController::class,"home"]);
Route::get("/donorinfo/{id}",[HomeController::class,"donorinfo"])->name('web.donorinfo');
Route::get("/donateinfo/{id}",[HomeController::class,"donateinfo"])->name('web.donateinfo');

//_______________HomeController____________Services______
Route::get("/token",[HomeController::class,"token"]);
Route::get("/donatemoney",[HomeController::class,"donatemoney"]);
Route::get("/donorsregistration",[HomeController::class,"donorsregistration"]);
Route::get("/donorsearch",[HomeController::class,'donorsearch']);
Route::get("/feedback",[HomeController::class,"feedback"])->name('feedback');

//_______________HomeController____________User_______

Route::get("/editInfo",[HomeController::class,"editInfo"]);
Route::get("/userallmessage",[HomeController::class,"userallmessage"]);

  
//_______________OthersController____________

Route::get("/donorlist",[SearchController::class,"index"]);
Route::get("/donorsearch",[SearchController::class,"search"])->name('web.donorsearch');   
Route::get("/donatemoney",[DonateController::class,"search"])->name('web.donatemoney');
Route::get("/allblog",[BlogController::class,"allblog"])->name('blog');
Route::get('/donor_update',[DonorsController::class,'update']);

Route::post('/add_donor',[DonorsController::class,'addData']);
Route::post('/update_donor',[DonorsController::class,'updateData']);
Route::post("/add_blog",[BlogController::class,'addBlog']);
Route::post("/add_feedback",[FeedbackController::class,'addFeedback']);
Route::post('add_donate',[DonateController::class,'addDonate']);
Route::post("/add_message",[MessageController::class,'addMessage']);
Route::post("/add_token",[TokenController::class,'addToken']);


//_______________SuperAdminController____________
Route::get("/adminpage",[SuperAdminController::class,"adminpage"]);
Route::get("/addadmin",[SuperAdminController::class,"addadmin"]);
Route::get("/removeadmin",[SuperAdminController::class,"removeadmin"]);
Route::get("/viewadmin",[SuperAdminController::class,"viewadmin"]);


Route::get("/updateadmin/{id}",[SuperAdminController::class,"updateadmin"]);
Route::get("/deleteadmin/{id}",[SuperAdminController::class,"deleteadmin"]);



//_______________AdminController____________
Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::get("/search-donor",[AdminController::class,"search"]);
Route::get("/activedonors",[AdminController::class,"activedonors"]);
Route::get("/feedbacks",[AdminController::class,"feedbacks"]);
Route::get("/registrationdonor",[AdminController::class,"donorsregistration"]);
Route::get("/blogs",[AdminController::class,"blogs"]);
Route::get("/adminblog",[AdminController::class,"adminblog"]);
Route::get("/donations",[AdminController::class,"donation"]);
Route::get("/deletefeedback/{id}",[AdminController::class,"deletefeedback"]);
Route::get("/deleteblog/{id}",[AdminController::class,"deleteblog"]);
Route::get("/deletemessage/{id}",[AdminController::class,"deletemessage"]);
Route::get("/deletedonation/{id}",[AdminController::class,"deletedonation"]);
Route::get("/deletedonor/{id}",[AdminController::class,"deletedonor"]);
Route::get("/message",[AdminController::class,"message"]);
Route::get("/allmessage",[AdminController::class,"allmessage"]);
Route::get("/admintoken",[AdminController::class,"token"]);
Route::get("/adminalltoken",[AdminController::class,"alltoken"]);
Route::get("/deletetoken/{id}",[AdminController::class,"deletetoken"]);

//_______________PostController____________

Route::post('add_post',[PostController::class,'addPost']);
Route::get("/post",[PostController::class,"post"]);
Route::get("/allpost",[PostController::class,"allpost"]);


//_______________CalculatorController____________

Route::post('calculation',[CalculatorController::class,'index']);  
Route::get("/calculation",[CalculatorController::class,"Calculation"]);



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



//______________###########_________________

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/redirects','App\Http\Controllers\HomeController@redirects');
Route::get('add_donor',['donorsregistration']);



