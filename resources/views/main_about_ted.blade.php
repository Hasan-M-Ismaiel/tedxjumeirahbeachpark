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
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">About TED, TEDx</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>About TED, TEDx</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Speakers Area -->
<section id="speakers" class="speakers section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">About TED</h3>
                    <h5 class="wow fadeInUp" data-wow-delay=".4s">TED is a nonprofit organization devoted to Ideas Worth
                        Spreading, started in the United States in 1984 as a conference where Technology, Entertainment and Design converged.
                        Today TED is an annual conference and it covers almost all topics — from science to business to global issues. TED believes passionately in the power of ideas to change the world. At TED, the world's leading thinkers and doers are asked to give the talk of their lives in 18 minutes. Talks are then made available, free, at TED.com.
                    </h5>
                    <!-- <p class="wow fadeInUp" data-wow-delay=".6s">Passionate about sparking conversation. Welcome! We're your TEDx Jumeirah Beach Park hosts, here to ignite your curiosity.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">About TEDx</h3>
                    <h5 class="wow fadeInUp" data-wow-delay=".4s">In the spirit of ideas worth spreading, TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. At a TEDx event, TEDTalks video and live speakers combine to spark deep discussion and connection in a small group. These local, self-organized events are branded TEDx, where x = independently organized TED event. The TED Conference provides general guidance for the TEDx program, but individual TEDx events are self-organized (subject to certain rules and regulations).
                    </h5>
                    <p class="wow fadeInUp" data-wow-delay=".6s">x = independently organized event</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Speakers Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection