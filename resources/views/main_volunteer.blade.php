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
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Join Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>volunteer</li>
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
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">We are looking for</h3>
                    <!-- <h2 class="wow fadeInUp" data-wow-delay=".4s">volunteers who can take ownership of certain primary tasks. They should have both the skills and the bandwidth to fulfill their role. They should be organized, self-managed and hard-working individuals.
                    </h2> -->
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Volunteer with us and take ownership of certain primary tasks.<br> We believe you have both the skills and the bandwidth to fulfill your role.
                    </p>
                    <br>
                    <p class="wow fadeInUp" data-wow-delay=".6s">If you are an organized, self-managed, and hard-working individual, apply now to make a difference and spark behind the stage!
                    </p>
                    <br>
                    <!-- <strong>Be a TEDx speaker and inspire the world!</strong> -->
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="section-title mb-0">
                    <div class="button mt-4 ms-0" style="float: center;">
                        <a href="{{ route('volunteer_form') }}" class="btn">Become a volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection