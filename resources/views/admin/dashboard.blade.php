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
                                        <a class="nav-link" href="{{url('/users')}}">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/activedonors')}}">Donors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/registrationdonor')}}">Add Donor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/adminblog')}}">Blog</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/feedbacks')}}">Feedback</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/donations')}}">Donation</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/admintoken')}}">Token</a>
                                    </li>

                                </ul>
                                <a class="nav-btn"href="{{url('/message')}}">
                                    <button class="btn btn-success">Message</button>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>WellCome To Admin Panel</h2>
                <ul>
                    <li> <a href="{{url('/home')}}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{url('/adminpage')}}"><i class="fas fa-angle-double-right"></i>Admin Panel</a></li>
                </ul>
            </div>
        </div>
    </div>
<!--  ************************* Contact Us Starts Here ************************** -->
<div class="about-us container-fluid">
        <div class="container">
            <div class="row natur-row no-margin">
                <div class="text-part col-md-6">
                  <!--   <h2>Messages</h2> -->
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius faucibus
                        ligula non congue. Suspendisse at pretium massa, sit amet
                        vulputate nibh. Nam posuere eros dolor. Donec vel arcu sagittis, pretium nisl </p>
                    <p  style="text-align: justify;"> Cras faucibus laoreet nibh, sit amet tincidunt leo mollis in. Etiam eu mauris metus.
                        Nulla facilisi. Etiam vestibulum,
                        nisi et convallis elementum, leo orci aliquam metus, id posuere massa neque vitae
                        arcu.</p>

                    <p style="text-align: justify;">Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien,
                        eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et
                        . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit
                        amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at
                        dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in,
                        dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida
                        vestibulum, urna justo posuere ante,
                        id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus </p>
                </div>
                <div class="image-part col-md-6">
                    <br>
                   <img src="assets/images/gallery/g10.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
  
<!--  ************************* Footer  Starts Here ************************** -->
    
    <footer>
        <div class="container">
            <div class="row">
            <div class="col-md-4">
            <h2 class="head">Our Story</h2>
            <p style="width: 80%">Our aim is to reduce the Complexity of finding house for the tenant and also Complexity of finding tenant for the landlord.This site will save time and It will reduce the cost of finding home for the renter.</p>
            </div>
        
          <div class="col-md-4">
            <h2 class="head">Contact Us</h2>
            <p> <i class="fas fa-map-marker-alt"></i>  A Blood Bank, Pabna Sadar, Pabna</p>
            <p><i class="fas fa-phone"></i>  +88 01521308477</p>
            <p><i class="fas fa-envelope"></i>  ananda.cse@gmail.com</p>
          </div>

          <div class="col-md-4 container special">
            <h2 class="head">Find Us On Social Media</h2>
              <span>
                <a style="padding: 7px;"><i class="fab fa-github"></i></a>
                <a style="padding: 7px;"><i class="fab fa-google-plus-g"></i></a>
                <a style="padding: 7px;"><i class="fab fa-pinterest-p"></i></a>
                <a style="padding: 7px;"><i class="fab fa-twitter"></i></a>
                <a style="padding: 7px;"><i class="fab fa-facebook-f"></i></a>
            </span>
          </div>
        </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2022 &copy; All Rights Reserved | Designed and Developed by Md Ananda Mia</a>
        </div>

    </div>
</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
