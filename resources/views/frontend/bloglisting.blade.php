<?php

use App\Models\SelectClass;

$sc = new SelectClass();
$selectblogs = $sc->selectBlog();

?>

@include('frontend.layouts.title')

<body>
    <!-- header -->
@include('frontend.layouts.header')
     <!-- header end -->

     <section class="about-section text-center pt-lg-5 pb-5">
        <div class="container pt-lg-5 pb-lg-5 pb-4">
            <h3 class="title-style text-center mb-5"><span>Blog Post</span></h3>
            <div class="row justify-content-center">
            @foreach ($selectblogs as $selectblog)
                <div class="col-lg-4 col-md-6">
                    <div class="about-single p-3">
                        <div class="about-icon mb-4">
                            @if($selectblog->image)
                            <img src="uploads/Postimg/{{$selectblog->image ?? '' }}" class="rounded-circle"  width="304" height="236"> 
                   
                            @else
                            <img src="uploads/Postimg/logo.png" class="rounded-circle"  width="304" height="236"> 
                   
                            @endif
                           </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="blogpage/{{ $selectblog->id }}">{{ $selectblog->title }}</a></h5>
                            <p>{!! substr($selectblog->description , 0, 200) !!}</p>
                          
                        </div>
                    </div>
                </div>
            @endforeach    
                <!-- <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="about-single p-3">
                        <div class="about-icon mb-4">
                            <img src="{{ asset('frontend/assets/images/bg1.jpg') }}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="about.html">Kidney Care Bharatpur</a></h5>
                            <p>Bharatput 03 Salikram Chowk</p>
                            <p>03455494</p>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                    <div class="about-single p-3">
                        <div class="about-icon mb-4">
                            <img src="{{ asset('frontend/assets/images/about.jpg') }}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="about.html">Kidney Care Chahbil</a></h5>
                            <p>Chahbil 23 kathmandu Nepal</p>
                            <p>01-4556645</p>
                        </div>
                    </div>
                </div> -->
              
            </div>
          
        </div>
    </section>
    <!-- //blog section -->

@include('frontend.layouts.footer')


</body>

</html>