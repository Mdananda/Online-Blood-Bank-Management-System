<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;
use App\Models\Donor;
use App\Models\Message;
use App\Models\Token;

class HomeController extends Controller
{
    public function index()
    {
    	return view ("home.index");
    }

    public function ananda()
    {
        return view ("home.ananda");
    }

    public function about()
    {
       return view ("home.about");
    }

    public function home()
    {
       return view ("home.index");
    }

    public function service()
    {
       return view ("home.service");
    }

    public function Blog()
    {
       return view ("home.blog");
    }

    public function contact()
    {
       return view ("home.contact");
    }


    //______________________Services___________

    public function donorsregistration()
    {
        return view("service.donorsregistration");
    }

    public function donorsearch()
    {
        return view("donorsearch");
    }

    public function donateinfo($id)
    {
        $donor=token::find($id);
        return view("service.add_donor", compact('donor'));
    }

    public function donatemoney()
    {
        return view("service.donatemoney");
    }

    public function token()
    {
        $token=Token::all();
        return view("service.TokenNumber", compact('token'));
    }

    public function donorinfo($id)
    {
        $donor=donor::find($id);
        return view("donorinfo", compact('donor'));
    }

    public function feedback()
    {
        {   
            $feedback=Feedback::all();
            return view('service.feedback',compact("feedback"));
        }
    }

    //______________________Users___________

    public function editInfo()
    {
        return view("profile.donorUpdate");
    }

    public function userallmessage()
    {
        $message=Message::all();
        return view("profile.allmessage", compact('message'));
    }
    
  //______________________Others___________

    public function redirects()
    {
        $role=Auth::user()->role;

        if ($role=='0')
        {
            return view('home.index');
        }

        elseif ($role=='1')
        {
            return view('admin.dashboard');
        }

        elseif ($role=='2')
        {
            return view('SuperAdmin.superadminindex');
        }

        else
        {
            return view('home.ananda');
        }
    }
}
