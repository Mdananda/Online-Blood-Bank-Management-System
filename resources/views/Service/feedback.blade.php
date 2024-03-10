<!DOCTYPE html>
<html>
    <head>
        @include("master.homecss")
    </head>
    <body>
        @include("master.header")


    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>All FeedBack</h2>
            <ul>
                <li> <a href="{{url('/home')}}"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a href="{{url('/contact')}}"><i class="fas fa-angle-double-right"></i>Back</a></li>
            </ul>
            </div>
        </div>
     </div>

        <div id="feedback" class="blog">
           <div class="container row">
           @foreach($feedback as $data)
                <div class="col-md-6 col-sm-12">
                    <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/a.webp" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <p style="font-size: 18px;">Name: {{$data->Name}}</p>
                            <p style="text-align: justify; font-family: sans-serif;"></i>Rating: <b>{{$data->Rating}} /5</b></p>
                            <p style="text-align: justify; font-family: sans-serif;"> <i class="fas fa-angle-double-right"></i> {{$data->Feedback}}</p>
                            <!-- <a href="#">Read More <i class="fas fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <br>
            <br>
        </div>

      <!--*************** Footer  Starts Here *************** -->
        @include("master.footerEx")

    </body>
 @include("master.homescript")
</html>