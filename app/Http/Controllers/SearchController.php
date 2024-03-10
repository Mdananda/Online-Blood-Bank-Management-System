<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donor;

class SearchController extends Controller
{
    public function search(Request $request)   
    {
         if($request->current_city && $request->blood_group && $request->status){   
            $cities = DB::table('donors')
            ->where('current_city','=', $request->current_city)
            ->where('blood_group','=', $request->blood_group)
            ->where('status','=', $request->status)
            ->get();
            return view('donorsearch',compact('cities'));

        }else{
            return view("donorsearch");
        }    
    }
}
