@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">TEDx Salon 2</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Call Action Area -->
<section id="about" class="call-action_main  ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="inner-content">
                    <div class="text">
                        <div class="container">
                            <div class="row mt-1 pt-3">
                                <div class="row">
                                    <div class="section-title">
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s"> COMMING SOON! 😍 
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay=".6s"><strong class="text-danger">TEDx Salon</strong> is a smaller, more focused version of a <strong class="text-danger">TEDx</strong> event. It typically features a single theme or topic, allowing for deeper exploration through talks, discussions, and interactive activities
                                    </p>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay=".6s">Unlike full-day <strong class="text-danger">TEDx events</strong>, salons are usually shorter and more intimate, fostering closer engagement between attendees and speakers. These events are part of the broader <strong class="text-danger">TEDx</strong> program, independently organized under a <strong class="text-danger">TED</strong> license.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="section-title mb-0">
                                            <div class="button mt-4 ms-0" style="float: center;">
                                                <a href="{{ route('register_salon_2') }}" class="btn" style="color: white;">register now !</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

<!-- </section> -->
<!-- /End Speakers Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection