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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="hero-content">
                    <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Dubai,
                        UAE</h5>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Beauty of Diversity
                    </h2>
                    <!-- <p class="wow fadeInUp" data-wow-delay=".6s">to promote creative ideas worth spreading
                    </p> -->
                    <!-- <div class="button wow fadeInUp" data-wow-delay=".8s">
                        <a href="#" class="btn ">November 24, 2024</a>
                    </div> -->
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

<div class="row mt-5">
    <div class="col-12">
        <div class="section-title">
            <a class="navbar-brand" href="{{ route('main') }}">
                <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" style="width:auto; height:50" alt="Logo">
            </a>
            <p class="wow fadeInUp" data-wow-delay=".6s">Is an Independently Organized <span class="text-danger">TED</span> Event.</p>
            <h3 class="wow zoomIn mt-4" data-wow-delay=".2s"><a href="{{ route('main') }}#about">learn more</a></h3>
        </div>
    </div>
</div>

<div class="about_video section">
    <div class="container mb-5  d-flex  align-items-center justify-content-center min-vh-100">
        <video width="75%" height="auto" controls autoplay loop >
            <source src="{{ asset('assets_main/assets/hero_video/promo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
         </video>
    </div>
</div>

<!-- Start Features Area -->
@include('includes.features_area')
<!-- /End Features Area -->

<!-- Start about Area -->
@include('includes.aboutEvent')
<!-- /End about Area -->

<!-- Start Speakers Area -->

<!-- /End Speakers Area -->

<!-- Start Sponsors Area -->

<!-- End Sponsors Area -->

<!-- Start members Table Area -->
@include('includes.members')
<!--/ End Pricing Table Area -->

<!-- Start Testimonials Section -->

<!-- /End Testimonials Section -->

<!-- Start Call Action Area -->
<section id="about" class="call-action_main ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="inner-content">
                    <div class="text">
                        <!-- <h5 class="wow zoomIn" data-wow-delay=".2s">Tell me more about TED & TEDx</h5> -->
                        <div class="container">
                            <div class="row mt-1 pt-3">
                                <div class="row">
                                    <!-- <div class="section-title"> -->
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">About TED</h2>
                                    <p class="wow fadeInUp" data-wow-delay=".6s"><strong class="text-danger">TED</strong> is a nonprofit organization devoted to Ideas Worth
                                        Spreading, started in the United States in 1984 as a conference where Technology, Entertainment and Design converged.
                                    </p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">Today TED is an annual conference and it covers almost all topics — from science to business to global issues. TED believes passionately in the power of ideas to change the world. At TED, the world's leading thinkers and doers are asked to give the talk of their lives in 18 minutes. Talks are then made available, free, at TED.com.</p>
                                    <!-- </div> -->
                                </div>
                                <div class="row mt-5 border-top pt-5">
                                    <!-- <div class="section-title"> -->
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">About TEDx</h2>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">In the spirit of ideas worth spreading, TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. At a TEDx event, TEDTalks video and live speakers combine to spark deep discussion and connection in a small group. </p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">These local, self-organized events are branded TEDx, where x = independently organized TED event. The TED Conference provides general guidance for the TEDx program, but individual TEDx events are self-organized (subject to certain rules and regulations).</p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay=".6s"><strong class="text-danger">x </strong> = independently organized event</p>

                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- <h2 class="wow fadeInUp" data-wow-delay=".4s">About TEDx
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">In the spirit of ideas worth spreading, TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. At a TEDx event, TEDTalks video and live speakers combine to spark deep discussion and connection in a small group. These local, self-organized events are branded TEDx, where x = independently organized TED event. The TED Conference provides general guidance for the TEDx program, but individual TEDx events are self-organized (subject to certain rules and regulations).
                            x = independently organized event
                        </p> -->
                    </div>
                    <div class="button wow fadeInUp" data-wow-delay=".8s">
                        <a href="https://www.ted.com/about/programs-initiatives/tedx-program" target="_blank" class="btn">TEDx program</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

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

@endsection