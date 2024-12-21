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
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Salon Event</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Attendance Registration Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Speakers Area -->
<section id="speakers" class="speakers section">
    <div class="row">
        <div class="container">
            <div class="row mx-0 justify-content-center">
                <div class="">

                    <!-- Validation Errors -->
                    @if ($errors->any())
                    <div class="mb-4 mt-4" id="signUpForm">
                        <span class="pe-4 font-medium text-danger border border-danger border-rounded rounded">
                            <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' Something went wrong.') }}
                        </span>

                        <ul class="mt-3 list-group list-group-flush text-danger">
                            @foreach ($errors->all() as $error)
                            <li class="list-group-item text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <!--the form-->
                    <!--<h1 class="text-center fs-4">Form Wizard - Multi Step Form</h1>-->
                    <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeRegister_salon_1") }}' method="POST">
                        @csrf
                        <!-- start step indicators -->
                        <div class="form-header d-flex mb-4">
                            <span class="stepIndicator">Personal info</span>
                            <!-- <span class="stepIndicator">other info</span> -->
                            <!-- <span class="stepIndicator">your comments</span> -->
                        </div>
                        <!-- end step indicators -->

                        <!-- step one -->
                        <div class="step">
                            <!--first name-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Full name</strong></span>
                                <input name="full_name" type="text" class="form-control" placeholder="full name" value="{{ old('full_name') }}" />
                            </label>

                            <!--email-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Email address</strong></span>
                                <input name="email" type="email" class="form-control" placeholder="me@example.com" value="{{ old('email') }}" />
                            </label>

                            <!--phone-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Phone number</strong></span>
                                <input name="phone_number" type="text" class="form-control" placeholder="+971-5555555" value="{{ old('phone_number') }}" />
                            </label>

                            <!--country-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Country</strong></span>
                                <input name="country" type="text" class="form-control" placeholder="UAE" value="{{ old('country') }}" />
                            </label>

                            <!--city-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>City</strong></span>
                                <input name="city" type="text" class="form-control" placeholder="Dubai" value="{{ old('city') }}" />
                            </label>

                            <!--birthday-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Birthday</strong></span>
                                <input name="birthday" type="date" class="form-control" placeholder="06-0-1900" value="{{ old('birthday') }}" />
                            </label>

                            <!--Education-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Education</strong></span>
                                <input name="education" type="text" class="form-control" placeholder="" value="{{ old('education') }}">
                            </label>

                            <!--current work-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Current work</strong></span>
                                <input name="work" type="text" class="form-control" placeholder="" value="{{ old('work') }}">
                            </label>

                            <!--industry-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Industry</strong></span>
                                <input name="industry" type="text" class="form-control" placeholder="" value="{{ old('industry') }}">
                            </label>

                             <!--interests-->
                             <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Interests</strong></span>
                                <textarea rows="4" cols="50" name="interests" type="text" class="form-control" placeholder="interested in ..." value="{{ old('interests') }}"></textarea>
                            </label>

                            <!--why-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>why would you like to attend?</strong></span>
                                <textarea rows="4" cols="50" name="why" type="text" class="form-control" placeholder="Because ..." value="{{ old('why') }}"></textarea>
                            </label>

                        </div>

                        <!-- step two -->
                        <div class="step">

                        </div>

                        <!-- step three -->
                        <div class="step">
                        </div>

                        <!-- start previous / next buttons -->
                        <div class="form-footer d-flex">
                            <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
                            <button type="button" id="nextBtn" onclick="nextPrev(3)">Submit</button>
                        </div>
                        <!-- end previous / next buttons -->
                    </form>
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