@extends('layout.masterlayout')
<!--================Header Menu Area =================-->

<!--================Header Menu Area =================-->
@section('content')
    <!--================Home Banner Area =================-->
    <section class="home_banner_area">

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">

                @foreach ($banner as $banners)
                    <img src="{{ asset('banner/' . $banners->image) }}" alt="">
                @endforeach
                {{-- <img src="{{ asset('') }}assets/img/b1.jpg" data-thumb="img/b1.jpg" alt="" title="">
                <img src="{{ asset('') }}assets/img/b2.jpg" data-thumb="img/b2.jpg" alt="" title="">
                <img src="{{ asset('') }}assets/img/b3.jpg" data-thumb="img/b3.jpg" alt="" title="">
                <img src="{{ asset('') }}assets/img/b4.jpg" data-thumb="img/b4.jpg" alt="" title=""> --}}
            </div>
        </div>
        <div class="donation_area">
            <div class="container">
                <div class="row donation_inner">
                    <div class="col-lg-4">
                        <div class="dontation_item green">
                            <div class="media">
                                <div class="media-body">
                                    <h4>Contact Us</h4>
                                    <p><strong>{{$about->name}}</strong></p>
                                    <p>{{$about->title}}</p>

                                    <p><strong>Contact NO. {{$about->phone}}</strong> </p>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="dontation_item yellow">
                            <div class="media">
                                <div class="media-body">
                                    <h4>Consultation Timing</h4>
                                    <p>@php echo ($about->consultationtiming) @endphp</p>

                                    <!-- 	<p><strong>Hope Oncocare Cancer Consultancy:</strong> 14/73, Shipra Path, Mansarovar Sector 1, Mansarovar, Jaipur, Rajasthan 302020 </p>

                  <p>Mon to Sat: 5pm to 7pm, Sun: Off</p> -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="dontation_item pink">
                            <div class="media">
                                <div class="media-body">
                                    <!--<h4>Contact</h4>-->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14236.536341498751!2d75.769532!3d26.8674807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5ad06a86fdb%3A0xef2c9d6a3dbd292d!2sHCG%20Cancer%20Hospital%20-%20(Mansarovar%2C%20Jaipur)!5e0!3m2!1sen!2sin!4v1715593549219!5m2!1sen!2sin"
                                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14235.50264747511!2d75.75336629625033!3d26.875691215008008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7cf09b93a2b005e!2sHope%20Oncocare%20Clinic!5e0!3m2!1sen!2sin!4v1634820599360!5m2!1sen!2sin" width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         -->
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_area">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                </div>
                @if ($about)
                    <div class="col-lg-4">
                        <!--  <div class="welcome_img">
                                    <img class="img-fluid" src="img/doctor.jpg" alt="">
                                </div> -->
                        <div class="welcome_img">
                            <img class="img-fluid" src="{{ asset('about/' . $about->image) }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="welcome_text">
                            <h4>{{ $about->name }}</h4>
                            <h5>{{ $about->title }}</h5>

                            <p>@php echo ($about->description) @endphp</p>

                            <p>@php echo ($about->qualification) @endphp</p>

                            <a class="read btn" href="{{ route('admin.abouts') }}">Read More</a>
                        </div>
                    </div>


            </div>
            @endif

        </div>
    </section>
    <!--================End Welcome Area =================-->
    <!--================Causes Area =================-->
    <section class="causes_area">
        <div class="container">
            <div class="main_title">
                <h2>Services</h2>
            </div>

                {{-- <div class="causes_slider owl-carousel">
                    <div class="item">
                        <div class="causes_item">

                        </div>
                    </div>


        </div> --}}
        <div class="row">
            @foreach ($servicename as $servicenames)
            <div class="col-lg-4">
           <div class="service_box mt-4">
            <div class="causes_img">

                <img class="img-fluid" src="{{ asset('service/' . $servicenames->image) }}" alt="">
            </div>
            <div class="text-align-center">
                <h4 class="text-center py-2">{{ $servicenames->name }}</h4>
                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>-->
            </div>
            <div class="causes_bottom ">
                {{-- <a href="{{route('admin.addservices',$servicenames->id)}}">Read More</a> --}}
                <a href="{{route('admin.addservices',$servicenames)}}" class="btn btn-success">Read More</a>
            </div>
           </div>
        </div>
            @endforeach
        </div>
        </div>
    </section>
    <!--================End Causes Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="white_title">
                <h2>Photo Gallery</h2>
            </div>

            <div class="image-row">
                @foreach ($photo as $photos )
                <a class="example-image-link" href="{{ asset('photo/' . $photos->image) }}"
                    data-lightbox="example-set" data-title="">
                    <img class="example-image" src="{{ asset('photo/' . $photos->image) }}" alt=""></a>
                    @endforeach


                {{-- <a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g2.jpg"
                    data-lightbox="example-set" data-title="">
                    <img class="example-image" src="{{ asset('') }}assets/img/gallery/g2.jpg" alt=""></a>
                <a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g3.jpg"
                    data-lightbox="example-set" data-title="">
                    <img class="example-image" src="{{ asset('') }}assets/img/gallery/g3.jpg" alt=""></a>
                <a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g4.jpg"
                    data-lightbox="example-set" data-title="">
                    <img class="example-image" src="{{ asset('') }}assets/img/gallery/g4.jpg" alt=""></a> --}}
            </div>
        </div>
    </section>



    <!-- <section class="video-area">

               <div class="container">
                <div class="row">
                        <div class="col-lg-6">
                <iframe width="100%" height="315" src="embed/HoaxwSZXK0s.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6">
                <iframe width="100%" height="315" src="embed/aKBQtzPYa44.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                </div>
                        </div>
               </section>  -->


    <!-- <section class="testimonials_area p_120">
                <div class="container">
                <div class="row testimonials_inner">
                <div class="col-lg-12">
                <div class="testi_text">
                <h2>Testimonial</h2>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="testi_slider owl-carousel">
               <div class="item">
                <div class="testi_item">
                 <img src="img/testimonials/testi-1.png" alt="">
                 <p>Thanks to Dr. Ankit Sir and his wonderful Team. All the management and Staff of HCG Hospital. Very humble and amazing Doctor one of the best surgical oncologist in Rajasthan.</p>
                 <h4>Kapil</h4>
                </div>
               </div>
               <div class="item">
                <div class="testi_item">
                 <p>It is miraculous that whole bone marrow test has been done without pain and that patient is absolutely satisfied. Special thanks to Dr. Ankit ji. God bless you.</p>
                 <h4>Poonam</h4>
                </div>
               </div>
               <div class="item">
                <div class="testi_item">
                 <p>I had Head & Neck cancer surgery was performed by Dr. Ankit. On my first visit to him, he explained the pros and cons of the surgery. My surgery was successful. During post operative period care provided by team was excellent". His words were always encouraging. Very humble, caring, to me and family members. Thanks Dr. Ankit Sir</p>
                 <h4>Naresh</h4>
                </div>
               </div>


              </div>
                </div>
                </div>
                </div>
                </section> -->
    <!--================End Testimonials Area =================-->

    <!--================Clients Logo Area =================-->
    <!--<section class="clients_logo_area">
                <div class="container">
                <div class="clients_slider owl-carousel">
                <div class="item">
                <img src="img/clients-logo/c-logo-1.png" alt="">
                </div>
                <div class="item">
                <img src="img/clients-logo/c-logo-2.png" alt="">
                </div>
                <div class="item">
                <img src="img/clients-logo/c-logo-3.png" alt="">
                </div>
                <div class="item">
                <img src="img/clients-logo/c-logo-4.png" alt="">
                </div>
                <div class="item">
                <img src="img/clients-logo/c-logo-5.png" alt="">
                </div>
                </div>
                </div>
                </section>-->
    <!--================End Clients Logo Area =================-->


    <!--================ start footer Area  =================-->
    {{--  --}}
    <!--================ End footer Area  =================-->
@endsection



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
