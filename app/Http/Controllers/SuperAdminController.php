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

class SuperAdminController extends Controller
{
    public function adminpage()
    {
       return view('admin.dashboard');
    }

    public function addadmin()
    {
        $data=user::all();
        return view ("SuperAdmin.addAdmin",compact("data"));
    }

    public function removeadmin()
    {
        $data=user::all();
        return view ("SuperAdmin.removeAdmin",compact("data"));
    }

    public function viewadmin()
    {
        $data=user::all();
        return view ("SuperAdmin.viewadmin",compact("data"));
    }


    public function updateadmin($id)
    {
        $data=user::find($id);

        $name=$data->name;
        $role=$data->role;
        $email=$data->email;

        $donor = "UPDATE users SET name= '$name', role='1' WHERE email='$email'";

        $con = mysqli_connect("localhost", "root", "", "bloodbank");
        $donor_run = mysqli_query($con, $donor);
        if($donor_run)
        {
            $_SESSION['status'] = "Data Update";
            return redirect()->back();
        }
        else
        {
            $_SESSION['status'] = "Not Update";
            return redirect()->back();
        }
    }

    public function deleteadmin($id)
    {
        $data=user::find($id);

        $name=$data->name;
        $role=$data->role;
        $email=$data->email;

        $donor = "UPDATE users SET name= '$name', role='0' WHERE email='$email'";

        $con = mysqli_connect("localhost", "root", "", "bloodbank");
        $donor_run = mysqli_query($con, $donor);
        if($donor_run)
        {
            $_SESSION['status'] = "Data Update";
            return redirect()->back();
        }
        else
        {
            $_SESSION['status'] = "Not Update";
            return redirect()->back();
        }
    }
}
