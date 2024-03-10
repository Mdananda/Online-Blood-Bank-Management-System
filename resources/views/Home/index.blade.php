<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank (Online Blood Management System) </title>
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
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url('/home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/service')}}">Services</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/contact')}}">FeedBack</a>
                                    </li>

                                </ul>
                                <a class="nav-btn" href="{{url('/donatemoney')}}">
                                    <button class="btn btn-success">Donate Now</button>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/S-02.webp" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">We Donate More than 10,000 Times Blood</h1>
                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                     <a href="{{url('/donorsearch')}}" class="btn btn-success hidden-xs">Search Donor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/S-01.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <a href="{{url('/donatemoney')}}" class="btn btn-success hidden-xs">Donation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/S-03.webp" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Save the Life with Us</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <a href="{{url('/donorsregistration')}}" class="btn btn-success hidden-xs">Donate Blood</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ################# Slider Starts Here#######################--->

    <div class="about-us container-fluid">
        <div class="container">
            <div class="row session-title">
                 <h2 style="font-family: Georgia, serif; font-size: 25px;">About US</h2>
                <p style="padding-top: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row natur-row no-margin">
                <div class="text-part col-md-6">
                    <h2>We Are Blood Donors</h2>
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

    <!-- #################  LookingFor #######################--->

    <div class="lloking-for container-fluid">
        <div class="inn-lay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 natur-col text-center mx-auto">
                        <h2>Search For Donors</h2>
                        <h4 style="padding-top: 5px;">Looking for a Servicee to Donor More Blood</h4>
                        <button class="btn btn-light"><a href="{{url('/donorsearch')}}" style="padding-top: 0px;"> Donor Search</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="our-services container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2 style="font-family: Georgia, serif; font-size: 25px;">What Are We Doing ?</h2>
                <p style="padding-top: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
               <div class="service-row row">
                <div class="col-md-4">
                    <div class="service-col">
                        <img src="assets/images/gallery/g1.jpg" alt="">
                        <div class="serv-detail">
                             <h4 style="font-family: Georgia, serif;">Donor Registration</h4>
                             <p style="font-family: cursive;">Just fillup the form and become a donor. Your blood can save anybodys life.</p>
                             <button class="btn btn-sm btn-danger" style="padding: 5px 15px;"><a href="{{url('/donorsregistration')}}"> Go</a></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-col">
                        <img src="assets/images/gallery/g2.jpg" alt="">
                        <div class="serv-detail">
                            <h4 style="font-family: Georgia, serif;">Search For Donors</h4>
                            <p style="font-family: cursive;">Do you have serious paitent? Don't be late. Search here for donors in your area.</p>
                            <button class="btn btn-sm btn-danger" style="padding: 5px 15px;"><a href="{{url('/donorsearch')}}">Go </a></ button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-col">
                        <img src="assets/images/gallery/g3.jpg" alt="">
                        <div class="serv-detail">
                            <h4 style="font-family: Georgia, serif;">Donate Us</h4>
                            <p style="font-family: cursive;">If you got any help from our service then please! donate us.</p>
                            <button class="btn btn-sm btn-danger" style="padding: 5px 15px;"><a href="{{url('/donatemoney')}}">Go </a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ************************* Blog Starts Here ************************** -->
    <div class="blog">

        <div class="container">
            <div class="row session-title">
                <h2 style="font-family: Georgia, serif; font-size: 25px;">Our Blog</h2>
                <p style="padding-top: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row blog-row">
                <div class="col-md-6 col-sm-12">
                   <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/blog_01.jpg" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <h2>Susmita Sarkar</h2>
                            <p class="blog-desic" style="text-align: justify;">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            <!-- <a href="#">Read More <i class="fas fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/blog_02.jpg" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <h2>Simanto Sarkar</h2>
                            <p class="blog-desic" style="text-align: justify;">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            <!-- <a href="#">Read More <i class="fas fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- ######## Blog End ####### -->


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

    <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
