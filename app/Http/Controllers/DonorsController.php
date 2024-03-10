<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Donor;

class DonorsController extends Controller
{
    
    //
    public function addData(Request $req)
    {

        $donor = new Donor;
        $donor->firstName=$req->firstName;
        $donor->email=$req->email;
        $donor->blood_group=$req->blood_group;
        $donor->status=$req->status;
        $donor->birthDate=$req->birthDate;
        $donor->phoneNumber=$req->phoneNumber;
        $donor->weight=$req->weight;
        $donor->gender=$req->gender;
        $donor->city=$req->city;
        $donor->current_city=$req->current_city;
        $donor->address=$req->address;
        $donor->save();

        $role=Auth::user()->role;

        if ($role == '0')
            return view ("home.ananda"); 
        elseif ($role>='1')
            return view ("admin.ananda");

    }

    public function updateData(Request $req)
    {
        $firstName=$req->firstName;
        $email=$req->email;
        $blood_group=$req->blood_group;
        $status=$req->status;
        $birthDate=$req->birthDate;
        $phoneNumber=$req->phoneNumber;
        $weight=$req->weight;
        $gender=$req->gender;
        $city=$req->city;
        $current_city=$req->current_city;
        $address=$req->address;

        $donor = "UPDATE donors SET firstName= '$firstName', blood_group='$blood_group', status='$status', birthDate='$birthDate', phoneNumber='$phoneNumber', weight='$weight', gender='$gender', city='$city', current_city='$current_city', address='$address' WHERE email='$email' ";

        $con = mysqli_connect("localhost", "root", "", "bloodbank");
        $donor_run = mysqli_query($con, $donor);
        if($donor_run)
        {
            $_SESSION['status'] = "Data Update";
            return redirect()->back()->with('success','successfully Update');
        }
        else
        {
            $_SESSION['status'] = "Not Update";
            return redirect()->back()->with('success','Unsuccessfully Update');
        }
    }

}
