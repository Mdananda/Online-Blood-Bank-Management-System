<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function allMessage()
    {
       {   
            $message=Message::all();
            return view('home.allmessage',compact("message"));
        }
    }
    
    public function addMessage(Request $req){

    $message = new Message;
        $message->Name=$req->Name;
        $message->Email=$req->Email;
        $message->Message=$req->Message;
        $message->save();
        
    return redirect()->back()->with('success','Your Message Send Successfully');
    }
}
