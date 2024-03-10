<!DOCTYPE html>
<html>
<head>
    @include("master.homecss")
</head>
<body>
    @include("master.header")

        <div class="contaienr-fluid p-12" style="background-color: white; padding: 80px 50px;">
            <h2 class="p-6" style="font-size: 24px; padding-bottom: 60px;">Search For Blood Donors</h2>
            <div class="p-12">
                <form action="{{ route('web.donorsearch') }}" method="GET">
                <div class="row" style="padding: 20px 60px;">
                    <div class="col-md-4 mb-3">
                        <label for="state">Current City</label>
                        <select class="custom-select d-block w-100" id="current_city" name="current_city" required>
                            <option value="">Choose...</option>
                            <option value="Dhaka">Dhaka</option>
                              <option value="Mymensingh">Mymensingh</option>
                              <option value="Netrokona">Netrokona</option>
                              <option value="Sherpur">Sherpur</option>
                              <option value="Tangail">Tangail</option>
                              <option value="Jamalpur">Jamalpur</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid Country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Blood Group</label>
                        <select class="custom-select d-block w-100" id="blood_group" name="blood_group" required>
                            <option value="">Choose...</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Status</label>
                        <select class="custom-select d-block w-100" id="status" name="status" required>
                            <option value="">Choose...</option>
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                        </select>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
            <br>
            <hr>
            <br>
            @if(isset($cities))
                <table class="table table-hover">
                    <tbody>
                        @if(count($cities) > 0)
                             <div class="blog">
                                <div class="container">
                                <div class="row blog-row">
                                    @foreach($cities as $value)
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-singe row">
                                            <div class="col-sm-5 blog-img-tab">
                                               <img src="assets/images/blog/a.webp" alt="">
                                            </div>
                                        <div class="col-sm-7" style="padding-top: 15px;">
                                            <p style="text-align: justify; font-family: sans-serif;"> Name: {{$value->firstName}}</p>
                                            <p style="text-align: justify; font-family: sans-serif;"> Blood Group: <b> {{$value->blood_group}} </b></p>
                                            <p style="text-align: justify; font-family: sans-serif;"> City(Home): {{$value->city}}</p>
                                            <p style="text-align: justify; font-family: sans-serif;"> Current City: {{$value->current_city}}</p>
                                            <p style="text-align: justify; font-family: sans-serif;"> Status: <b> {{$value->status}} </b></p>
                                            <a href="{{url('/donorinfo', $value->id)}}"><p style="text-align: justify; font-family: sans-serif; color: green;"><b> More Details <i class="fas fa-angle-double-right"></i> </b></p></a>   
                            
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
                            <tr><td style="color: red; font-size: 18px; background-color: lightgray;"><b>"SORRY! THE FOLLOWING BLOOD GROPU’S DONORS ARE NOT AVAILABE TRY AGAIN LATER."</b></td></tr>
                        @endif
                    </tbody>
                </table>
                @endif
            </div>
        </div>

<!--*************** Footer  Starts Here *************** -->
        @include("master.footerEx")
</body>
<!-- @include("master.homescript") -->
</html>