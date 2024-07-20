@extends('layouts.app_main')

@section('content')

<!--[if lte IE 9]>
    <p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
    </p>
<![endif]-->


<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">About</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>about</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Start Features Area -->
<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 d-flex  align-items-center justify-content-center">
                <!-- <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" alt="Logo"> -->
                <img src="{{ asset('assets_main/assets/images/122.png') }}" style="width:500px; height:auto" alt="Logo">
            </div>
            <div class="col-lg-8 col-md-12 col-12 d-flex justify-content-center align-items-center">
                <!-- <div class="section-title"> -->
                <!-- <h6 class="wow zoomIn" data-wow-delay=".2s">Our theme</h6> -->
                 <div>
                     <h2 class="wow fadeInUp" data-wow-delay=".4s"><span class="text-danger">TEDx</span> <span class="display-6">Jumeirahbeachpark </span></h2>
                     <p class="wow fadeInUp" data-wow-delay=".6s">The UAE is a living canvas where threads of culture, language, and tradition intersect. TEDxJumeirahBeachPark celebrates this vibrant tapestry, inviting you to explore stories from Emiratis, expatriates, and global thinkers. Our speakers, like colorful threads, share their unique perspectives, weaving a narrative of unity and understanding. Let's unravel the beauty of diversity together. </p>
                     <br>
                     <p class="wow fadeInUp" data-wow-delay=".6s">Dubai's skyline is a harmonious blend of innovation and heritage. These architectural marvels mirror the UAE's ethos—a fusion of tradition and modernity. Behind Dubai's architectural allure lies the golden ratio—a mathematical concept that defines beauty. At TEDxJumeirahBeachPark, we explore how mathematics and aesthetics intersect, creating a symphony of balance and allure. </p>
                     <br>
                     <p class="wow fadeInUp" data-wow-delay=".6s">Feel the pulse of diversity, witness architectural wonders, and embrace the golden ratio. Join us on November 24, 2024, at Dubai Jumeirah Beach Park.</p>
                         
                 </div>
            <!-- </div> -->
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->


<!-- Start Speakers Area -->
<!-- <section id="speakers" class="speakers section"> -->
@include('includes.about_ted_main')
<!-- </section> -->
<!-- /End Speakers Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection