<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank (Online Blood Management System)</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/fav.jpg">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
</head>

<body>

    <!-- ################# Slider Starts Here#######################--->
<header class="continer-fluid ">
     <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    OnlineBlood@bloodbank.com
                                    <span>|</span></li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Service Time : 12:AM</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
    
                                     <li> 
                                        <i class="fas fa-user"></i>
                                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-0 py-0 sm:block">
                    @auth
                        <li>
                            <x-app-layout>
                                
                            </x-app-layout>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                                       
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-12 logo">
                        <a href="{{url('/home')}}">
                            <img src="/assets/images/logo-03.png" alt="">
                        </a>

                    </div>
                    <div class="col-lg-9 col-md-12 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/user/profile')}}">Profile</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url('/editInfo')}}">Edit Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/userallmessage')}}">Nocite</a>
                                    </li>

                                </ul>
                                <a class="nav-btn"href="{{url('/donatemoney')}}">
                                    <button class="btn btn-success">Donate Now</button>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <body>

        @if (Route::has('login'))
            @auth

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Update Information</h2>
                <ul>
                    <li> <a href="{{url('/home')}}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{url('/user/profile')}}"><i class="fas fa-angle-double-right"></i>Back</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="p-12 contaienr-fluid" style="background-color: white; padding-top: 5px;">
            <h2 class="p-6" style="font-size: 24px">Update As Donor Information</h2>
            <div class="p-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
                @endif
  
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
                @endif
   
            <form class="form-horizontal" role="form" action="update_donor" method="POST" >
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">* All filled must be required</span>
                    </div>
                </div>
                @csrf
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" id="firstName" placeholder="Full Name" class="form-control" value="{{Auth::user()->name}}" autofocus required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="email" name="email"  id="email" placeholder="Email" class="form-control" name= "email" value="{{Auth::user()->email}}" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">Blood Group</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" name="blood_group" id="blood_group" required>
                              <option value="">None</option>
                             <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" name="status" id="status" required>
                            <option value="">Choose...</option>
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                        </select>
                    </div>
                </div>



                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Last Blood Donation Date</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate"  id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control"  required>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Weight </label>
                    <div class="col-sm-9">
                        <input type="number" name="weight" id="weight" placeholder="Please write your weight in kilograms" class="form-control" required>
                    </div>

                </div>


                <div class="form-group">
                    <label class="control-label col-sm-3" required>Gender</label>
                    <div class="col-sm-6">
                        <div class="row" >
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female"> Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="Male"> Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">City (Home)</label>
                    <div class="col-sm-9">
                        <select name="city" class="form-control" required>
                            <option value="">Choose...</option>
                            <optgroup label="Dhaka Division">
                              <option value="Dhaka">Dhaka</option>
                              <option value="Mymensingh">Mymensingh</option>
                              <option value="Netrokona">Netrokona</option>
                              <option value="Sherpur">Sherpur</option>
                              <option value="Tangail">Tangail</option>
                              <option value="Jamalpur">Jamalpur</option>
                             </optgroup>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="blood_group" class="col-sm-3 control-label">Current City</label>
                    <div class="col-sm-9">
                        <select name="current_city" class="form-control" required>
                            <option value="">Choose...</option>
                            <optgroup label="Dhaka Division">
                              <option value="Dhaka">Dhaka</option>
                              <option value="Mymensingh">Mymensingh</option>
                              <option value="Netrokona">Netrokona</option>
                              <option value="Sherpur">Sherpur</option>
                              <option value="Tangail">Tangail</option>
                              <option value="Jamalpur">Jamalpur</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" id="address" placeholder="Full Address" class="form-control" autofocus required>
                    </div>
                </div><!-- /.form-group -->
                
                <div class="p-12">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
                
            </form> <!-- /form -->
            </div>
        </div> <!-- ./container -->
            @else
                <div style="padding-bottom: 102px; padding-top: 30px; padding-left: 30px;">
                        <h1 class="font-semibold sm:px-6 leading-tight">Please  <button class="btn mybtn btn-lg btn-primary w-20"><a href="{{ route('login') }}">Log in</a> </button> <h1>


                        @if (Route::has('register'))
                            <!-- <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li> -->
                        @endif
                    @endauth
                </div>
            @endif
        <!--*************** Footer  Starts Here *************** -->
        @include("master.footerEx")
    </body>
    @include("master.homescript")
    </html>
