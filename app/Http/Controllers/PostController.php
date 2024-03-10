<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost(Request $req){

    $message = new Post;
        $message->Name=$req->Name;
        $message->Email=$req->Email;
        $message->Message=$req->Post;
        $message->save();
        
    return redirect()->back()->with('success','Your Message Send Successfully');
    }

    public function post()
    {
        return view('service.post');
    }

    public function allpost()
    {  
        $message=Message::all();
        return view('home.allmessage',compact("message"));

    }
}
