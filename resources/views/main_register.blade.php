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
                    <h1 class="page-title">Join Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Speaker</li>
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
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Ready to take the stage?</h3>
                    <!-- <h2 class="wow fadeInUp" data-wow-delay=".4s">If you want to be a speaker who will give a powerful talk that foster the love of learning in the audience, then don’t miss this opportunity!
                        A TEDx talk should center on an idea.
                    </h2> -->
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        If you want to be a speaker who will give a powerful talk that foster the love of learning in the audience, then don’t miss this opportunity!
                        A TEDx talk should center on an idea.
                    </p>
                    <br>
                    <p class="wow fadeInUp" data-wow-delay=".6s">A great, well-formed idea can be one of two things: it can be something that’s new and surprising; an idea or invention that the audience has never heard about or it can be a great basic idea (that the audience has maybe already heard) with a compelling new argument behind it that challenges beliefs and perspectives.
                    </p>
                    <br>
                    <strong>Be a TEDx speaker and inspire the world!</strong>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="section-title mb-0">
                    <div class="button mt-4 ms-0" style="float: center;">
                        <a href="{{ route('register_form') }}" class="btn">Become a speaker</a>
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