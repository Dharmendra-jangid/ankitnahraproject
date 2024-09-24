<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('')}}assets/img/favicon.png" type="image/png">
        <title>Dr. BS Ankit Nehra</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('')}}assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="{{asset('')}}assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="{{asset('')}}assets/vendors/animate-css/animate.css">



        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


        <!-- main css -->
        <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">

	<link rel="stylesheet" href="{{asset('')}}assets/cssnivo/default.css" type="text/css" media="screen">
    <!--<link rel="stylesheet" href="bar/bar.css" type="text/css" media="screen" />-->
    <link rel="stylesheet" href="{{asset('')}}assets/cssnivo/nivo-slider.css" type="text/css" media="screen">
    <!--<link rel="stylesheet" href="cssnivo/style.css" type="text/css" media="screen" />-->

    <!-----zoom---------->
	<link rel="stylesheet" href="{{asset('')}}assets/css1/screen.css">
	<link rel="stylesheet" href="{{asset('')}}assets/css1/lightbox.css">

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<script src="js1/jquery-1.11.0.min.js"></script>
	<script src="js1/lightbox.js"></script>
<!-- end-->


    </head>
    <body>


<div class="right-icons">
    <a class="qlwapp-toggle whats" href="https://wa.me/+919414350913/?text=" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a class="qlwapp-toggle phno" href="tel:+919414350913" target="_blank"><i class="fa fa-phone phone"></i></a>
</div>

<header class="header_area">
           <div class="top_menu row m0">
               <div class="container">
                <div class="float-left">
                    <ul class="list header_social">
                        <li><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <a class="ac_btn">Contact No. {{$about->phone}}</a>
                    <a class="dn_btn">{{$about->email}}</a>
                </div>
               </div>
           </div>

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <a class="navbar-brand logo_h" href="{{route('admin.index')}}"><img src="{{asset('')}}assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.abouts')}}">About Us</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                                <ul class="dropdown-menu">
                                   @php
                                    $service  = DB::table('services')->get();
                                    @endphp
                                     @foreach ($service as  $servicedit)
                                    <li><a href="{{route('admin.addservices',$servicedit->id)}}">{{$servicedit->name}}</a></li>
                                    @endforeach

                    {{-- <li><a href="{{route('admin.head_neck_cancer')}}">Head & Neck Cancer </a></li>
                    <li><a href="{{route('admin.throat_cancer')}}">Throat Cancer </a></li>
                    <li><a href="{{route('admin.breast_cancer')}}">Breast Cancer </a></li>
                    <li><a href="{{route('admin.gynecological_cancer')}}">Gynecological Cancer</a></li>
                    <li><a href="{{route('admin.gastrointestinal_cancer')}}">Gastrointestinal Cancer </a></li>
                    <li><a href="{{route('admin.lung_cancer')}}">Lung Cancer </a></li>
                    <li><a href="{{route('admin.liver_cancer')}}">Liver Cancer </a></li>
                    <li><a href="{{route('admin.bone_cancer')}}">Bone Cancer </a></li>
                    <li><a href="{{route('admin.soft_tissue_tumour')}}">Soft Tissue Tumour </a></li>
                    <li><a href="{{route('admin.kidney_cancer')}}">Kidney Cancer </a></li>
                    <li><a href="{{route('admin.urologic_cancer')}}">Urologic Cancer </a></li>
                    <li><a href="{{route('admin.prostate_cancer')}}">Prostate Cancer</a></li>
                    <li><a href="{{route('admin.hematological_cancer')}}">Hematological Cancer/Blood Cancer</a></li> --}}
                    {{-- <li><a href="{{route('admin.brain_cancer')}}">Brain Cancer</a></li> --}}
                                </ul>
                            </li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.photo_gallery')}}">Photo Gallery</a></li>
                    <li><a href="{{route('admin.video_gallery')}}">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.contact')}}">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
