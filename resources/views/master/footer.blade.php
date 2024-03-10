<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<footer>
    <section id="footer">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="head">Our Story</h2>
            <p style="width: 80%">Our aim is to reduce the Complexity of finding house for the tenant and also Complexity of finding tenant for the landlord.This site will save time and It will reduce the cost of finding home for the renter.</p>
          </div>
        
          <div class="col-md-4">
            <h2 class="head">Contact Us</h2>
            <p> <i class="fas fa-map-marker-alt"></i> A Blood Bank, Pabna Sadar, Pabna</p>
            <p><i class="fas fa-phone"></i> +88 01521308477</p>
            <p><i class="fas fa-envelope"></i> ananda.cse@gmail.com</p>
          </div>

          @if (Route::has('login'))
            @auth
           <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h2>Feedback</h2>
                        </div>
                        <div class="form-body">
                            <form class="form-horizontal" role="form" action="add_feedback" method="POST" >
                                @csrf
                            <input type="text" name="Name" value="{{Auth::user()->name}}" placeholder="Enter Name" class="form-control" fixed required>
                            <input type="text" name="Email" value="{{Auth::user()->email}}" placeholder="Enter Your Email" class="form-control" required>
                            <input type="text" name="Feedback" placeholder="Your Feedback" class="form-control" required>
                            <button style="background-color: rgb(25, 34, 33);" class="btn btn-sm btn-primary w-100">Send Feedback</button>
                            </form>
                        </div>  
                    </div>
            </div>
        
            @else
                <div style="padding-bottom: 102px; padding-top: 30px; padding-left: 30px;">
                    <p style="font-size:25px;">For Share Your FeedBack,</p>
                        <h1 class="font-semibold sm:px-6 leading-tight"> Please  <button class="btn mybtn btn-lg btn-primary w-20"><a href="{{ route('login') }}">Log in</a> </button> <h1>

                        @if (Route::has('register'))
                            <!-- <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li> -->
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Developed By Ananda Mia | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
      </div>
    </section>
</footer>
</body>
</html>