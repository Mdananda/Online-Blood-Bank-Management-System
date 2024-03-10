<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function AllBlog()
    {
       {   
            $blog=Blog::all();
            return view('home.all_blog',compact("blog"));
        }
    }

    public function addBlog(Request $req){

    $blog = new Blog;
        $blog->Name=$req->Name;
        $blog->Email=$req->Email;
        $blog->Blog=$req->Blog;
        $blog->save();
        
    return redirect()->back()->with('success','Your Blog Successfully');
    }

}
