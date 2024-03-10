<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank (Online Blood Management System)</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
                            <img src="assets/images/logo-03.png" alt="">
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
                                        <a class="nav-link" href="{{url('/about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url('/service')}}">Services</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/contact')}}">FeedBack</a>
                                    </li>

                                </ul>
                                @auth
                                <a class="nav-btn" href="{{url('/token')}}">
                                    <button class="btn btn-success">Token Number</button>
                                </a>
                                @else
                                <a class="nav-btn" href="{{url('/donatemoney')}}">
                                    <button class="btn btn-success">Donate Now</button>
                                </a>
                               @endauth
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
          <!--***************  Starts Here *************** -->

<h2 class="p-6" style="font-size: 35px; padding-left: 100px; padding-top: 40px;">For The Donation</h2>
 @if (Route::has('login'))
    @auth
<div class="p-12 contaienr-fluid" style="background-color: white; padding-top: 0px;">
            <div class="p-12">
            <form class="form-horizontal" role="form" action="{{ route('web.donatemoney') }}" method="GET">

                <div class="form-group">
                    <label for="token" class="col-sm-3 control-label">Token Number </label>
                    <div class="col-sm-9">
                        <input type="text" name="token" placeholder="Enter The Token Number" class="form-control" required>
                    </div>
                </div>
                
                <div class="p-12">
                <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </form> 

            <br>
            <hr>
            <br>
            @if(isset($amount))

                    @if(count($amount) > 0)
                             <div class="blog">
                                <div class="container">
                                <div class="row blog-row">
                                    @foreach($amount as $value)
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-singe row">
                                            <div class="col-sm-5 blog-img-tab">
                                               <img src="assets/images/blog/a.webp" alt="">
                                            </div>
                                        <div class="col-sm-7" style="padding-top: 15px;">
                                            <p style="text-align: justify; font-family: sans-serif;">Name: {{Auth::user()->name}}</p>
                                            <p style="text-align: justify; font-family: sans-serif;">Email: {{Auth::user()->email}}</p>
                                            <p style="text-align: justify; font-family: sans-serif;">Amount Of Money: {{$value->Amount}}</p>
                                            <p style="text-align: justify; font-family: sans-serif;">Token Number: {{$value->TokenNumber}}</p>
                                            <a href="{{url('/donateinfo', $value->id)}}"><p style="text-align: justify; font-family: sans-serif; color: green;"><b> Donate Now <i class="fas fa-angle-double-right"></i> </b></p></a> 
                              
                                        </div>
                                        </div>
                                        </div>
                                     @endforeach
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        @else
                            <tr><td style="color: red; font-size: 18px; background-color: red;"><b>"SORRY! THE FOLLOWING TOKEN NUMBER IS NOT VALID TRY AGAIN LATER."</b></td></tr>
                        @endif
                @endif
            </div>
        </div>
         @else
                <div style="padding-bottom: 102px; padding-top: 10px; padding-left: 100px;">
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
