<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use App\Models\Feedback;
use App\Models\Blog;
use App\Models\Donate;
use App\Models\Message;
use App\Models\Token;


class AdminController extends Controller
{
    public function user()
    {
    	$data=user::all();
    	return view ("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function activedonors()
    {
        $data=donor::all();
        return view("admin.activedonors",compact('data'));
    }

    public function Blogs()
    {
        $blog=Blog::all();
        return view("admin.blog",compact('blog'));
    }

    public function adminblog()
    {
        return view("admin.adminblog");
    }

     public function donation()
    {
        $donate=Donate::all();
        return view("admin.donate",compact('donate'));
    }

    public function feedbacks()
    {
        $feedback=Feedback::all();
        return view("admin.feedbacks",compact('feedback'));
    }
    public function deletefeedback($id)
    {
        $feedback=Feedback::find($id);
        $feedback->delete();
        return redirect()->back();
    }

    public function deleteblog($id)
    {
        $feedback=Blog::find($id);
        $feedback->delete();
        return redirect()->back();
    }

    public function deletemessage($id)
    {
        $message=Message::find($id);
        $message->delete();
        return redirect()->back();
    }

    public function deletedonation($id)
    {
        $feedback=Donate::find($id);
        $feedback->delete();
        return redirect()->back();
    }


    public function deletedonor($id)
    {
        $donor=donor::find($id);
        $donor->delete();
        return redirect()->back();
    }

    public function donorsregistration()
    {
        return view("admin.donorsregistration");
    }

    public function message()
    {
        return view("admin.message");
    }

    public function allmessage()
    {
        $message=Message::all();
        return view("admin.allmessage", compact('message'));
    }

    public function token()
    {
        return view("admin.token");
    }

    public function alltoken()
    {
        $token=Token::all();
        return view("admin.alltoken", compact('token'));
    }

    public function deletetoken($id)
    {
        $token=Token::find($id);
        $token->delete();
        return redirect()->back();
    }

  
    public function adminlogin(){

        return view('auth.login');
    }
}
