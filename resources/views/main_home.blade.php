@extends('layouts.app_main')

@section('content')

<!--[if lte IE 9]>
    <p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
    </p>
<![endif]-->

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="main__circle"></div>
    <div class="main__circle2"></div>
    <div class="main__circle3"></div>
    <div class="main__circle4"></div>
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="hero-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Beauty of Diversity
                    </h2>
                    <p class="wow fadeInUp" style="font-size: 20px;" data-wow-delay=".6s">Golden Ratio’s Hidden Patterns
                    </p>
                    <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Dubai,
                        UAE
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->


<!-- Start Count Down Area -->
<!-- <div class="count-down">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-head">
                    <div class="box-content">
                        <div class="box">
                            <h1 id="days">000</h1>
                            <h2 id="daystxt">Days</h2>
                        </div>
                        <div class="box">
                            <h1 id="hours">00</h1>
                            <h2 id="hourstxt">Hours</h2>
                        </div>
                        <div class="box">
                            <h1 id="minutes">00</h1>
                            <h2 id="minutestxt">Minutes</h2>
                        </div>
                        <div class="box">
                            <h1 id="seconds">00</h1>
                            <h2 id="secondstxt">Secondes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Count Down Area -->

<!-- Start Features Area -->
@include('includes.features_area')
<!-- /End Features Area -->



<div style="background-color: #F4F7FA;" class="pt-3">
    <div class="">
        <video id="myvideo" width="100%" height="auto" controls poster="{{ asset('assets_main/assets/images/poster_video.png') }}">
            <source src="{{ asset('assets_main/assets/hero_video/promo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="section-title row">
            <div class="col-lg-6  col-md-8 col-12 border-end">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" style="width:500px; height:auto" alt="Logo">
                </a>
            </div>
            <div class="col-lg-6  col-md-4 col-12 d-flex  align-items-center justify-content-center">
                <p class="wow fadeInUp" data-wow-delay=".6s">Is an Independently Organized
                    <span class="text-danger">TED</span> Event.
                </p>
                <!-- <br> -->
                <!-- <h3 class="wow zoomIn mt-4" data-wow-delay=".2s"><a href="{{ route('aboutTed') }}">learn more</a></h3> -->
            </div>
        </div>
    </div>
</div>

@include('includes.about_ted_main')


<!-- Start about Area -->
@include('includes.aboutEvent')
<!-- /End about Area -->

<section class="ftco-section" id="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <h2 class="heading-section mb-5 pb-md-4">our Partners</h2> -->
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Our Partners</h3>
                </div>

            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-1.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span>Media partner</span>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Start Speakers Area -->

<!-- /End Speakers Area -->

<!-- Start Sponsors Area -->

<!-- End Sponsors Area -->

<!-- Start members Table Area -->

<!--/ End Pricing Table Area -->

<!-- Start Testimonials Section -->

<!-- /End Testimonials Section -->



<!--countdown timer-->
<!-- <script>
    //var eventDate="2024-11-24";
    var eventDate = "{{ $event->date }}";
    // Set the date we're counting down to
    var countDownDate = new Date(eventDate).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is finished, write some text
        // if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        // }
    }, 1000);
</script> -->
<script>
    let video = document.querySelector('video');
    let isPaused = false;
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.intersectionRatio != 1 && !video.paused) {
                video.pause();
                isPaused = true;
            } else if (isPaused) {
                video.play();
                isPaused = false
            }
        });
    }, {
        threshold: 1
    });
    observer.observe(video);
</script>
@endsection