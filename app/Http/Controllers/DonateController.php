<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donate;
use App\Models\Token;

class DonateController extends Controller
{
    public function addDonate(Request $req){

    $donate = new Donate;
        $donate->Name=$req->Name;
        $donate->email=$req->email;
        $donate->phoneNumber=$req->phoneNumber;
        $donate->donateAmonut=$req->donateAmonut;
        $donate->token=$req->token;
        $donate->gender=$req->gender;
        $donate->city=$req->city;
        $donate->current_city=$req->current_city;
        $donate->address=$req->address;
        $donate->save();
 
        return view ("home.ananda");
       // return redirect()->back()->with('success','successfully Donation.');
    }

    public function search(Request $request)
    {
          if($request->token){   
            $amount = DB::table('tokens')
            ->where('TokenNumber','=', $request->token) 
            ->where('role','=', '1')  
            ->get();

            $token_nm = "UPDATE tokens SET role = '0' WHERE TokenNumber = $request->token ";
            $con = mysqli_connect("localhost", "root", "", "bloodbank");
        $donor_run = mysqli_query($con, $token_nm);
        if($donor_run)
        {
            $_SESSION['status'] = "Data Update";
        }
        else
        {
            $_SESSION['status'] = "Not Update";
        }


        return view('service.donatemoney', compact('amount'));

        }else{
            return view("service.donatemoney");
        }    
    }   

}
