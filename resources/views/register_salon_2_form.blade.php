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
                    <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeRegister_salon_2") }}' method="POST">
                        @csrf
                        <!-- start step indicators -->
                        <div class="form-header d-flex mb-4">
                            <span class="stepIndicator">personal info</span>
                            <span class="stepIndicator">other info</span>
                            <span class="stepIndicator">your comments</span>
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

                            <!--nationality-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Nationality</strong></span>
                                <input name="nationality" type="text" class="form-control" placeholder="syrian" value="{{ old('nationality') }}" />
                            </label>

                            <!--residence country-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Residence country</strong></span>
                                <input name="residence_country" type="text" class="form-control" placeholder="UAE" value="{{ old('residence_country') }}" />
                            </label>

                            <!--birthday-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Birthday</strong></span>
                                <input name="birthday" type="date" class="form-control" placeholder="06-0-1900" value="{{ old('birthday') }}" />
                            </label>

                            <!--Education-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Education</strong></span>
                                <input name="education" type="text" class="form-control" placeholder="software engineer" value="{{ old('education') }}">
                            </label>

                            <!--Work-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Work</strong></span>
                                <input name="work" type="text" class="form-control" placeholder="web developer" value="{{ old('work') }}">
                            </label>

                            <!--linkedin account-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Linkedin account</strong></span>
                                <input name="linkedin_account" type="text" class="form-control" placeholder="" value="{{ old('linkedin_account') }}">
                            </label>

                            <!--other social media account-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Other social media account</strong></span>
                                <input name="other_account" type="text" class="form-control" placeholder="" value="{{ old('other_account') }}">
                            </label>

                            <!--have you heard about ted-->
                            <label class="d-block mb-4">
                                <div class="form-group">
                                    <label for="question_1"><span class="me-2 text-danger h6">*</span><strong>Have you heard about what TED & TEDx events are?</strong></label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="question_1_yes" value="yes" checked>
                                        <label class="form-check-label" for="question_1_yes">
                                            yes
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="question_1_no" value="no">
                                        <label class="form-check-label" for="question_1_no">
                                            no
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="question_1_not_sure" value="not sure">
                                        <label class="form-check-label" for="question_1_not_sure">
                                            not sure
                                        </label>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <!-- step two -->
                        <div class="step">

                            <!--why-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Why do you want to be a partner at TEDxJumeirahbeachpark?</strong></span>
                                <textarea rows="4" cols="50" name="question_2" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_2') }}"></textarea>
                            </label>

                            <!--do you have a buisness?-->
                            <label class="d-block mb-4">
                                <div class="form-group">
                                    <label for="question_3"><span class="me-2 text-danger h6">*</span><strong>Do you have a buisness?</strong></label>

                                    <!--yes-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_3_yes" value="yes" checked>
                                        <label class="form-check-label" for="question_3_yes">
                                            yes
                                        </label>
                                    </div>

                                    <!--no-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_3_no" value="no">
                                        <label class="form-check-label" for="question_3_no">
                                            no
                                        </label>
                                    </div>

                                    <!-- part of-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_3_part" value="part of buisness">
                                        <label class="form-check-label" for="question_3_part">
                                            I'm part of a buisness
                                        </label>
                                    </div>
                                </div>
                            </label>

                            <!--in what field is your business-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><strong>What is the field of the mentioned buisness? (if it is there)</strong></span>
                                <input name="question_4" type="text" class="form-control" placeholder="In..." value="{{ old('question_4') }}">
                            </label>

                            <!--in which area you can help?-->
                            <label class="d-block mb-4">
                                <dive class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>In which area you can offer your services?</strong></dive>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_1" name="services[]" value="Marketing & Design">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Marketing & Design
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_2" name="services[]" value="Web Development">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Development
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_3" name="services[]" value="Photograph & Videograph">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Photograph & Videograph
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_4" name="services[]" value="Media Coverage">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Media Coverage
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_5" name="services[]" value="Food & Beverage">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Food & Beverage
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_6" name="services[]" value="Printing Services">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Printing Services
                                    </label>
                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_7" name="services[]" value="Tech & Logistics Services">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tech & Logistics Services
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="skill_18" name="services[]" value="other">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Other:
                                    </label>
                                    <input name="question_6" type="text" class="form-control" placeholder="" value="{{ old('question_6') }}">
                                </div>
                            </label>

                            <label class="d-block mb-4">
                                <div class="form-group">
                                    <label for="question_7"><span class="me-2 text-danger h6">*</span><strong>Have you previously partnered with any non-profit social events?</strong></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_7" id="question_7_yes" value="yes" checked>
                                        <label class="form-check-label" for="question_7_yes">
                                            yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_7" id="question_7_no" value="no">
                                        <label class="form-check-label" for="question_7_no">
                                            no
                                        </label>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <!-- step three -->
                        <div class="step">
                            <!--favourit speaker-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Please mention your favorite TED or TEDx talk?</strong></span>
                                <input name="question_8" type="text" class="form-control" placeholder="Because ..." value="{{ old('quesiton_8') }}">
                            </label>

                            <!--notes-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block"><strong>Please add any notes or comments?</strong></span>
                                <textarea rows="4" cols="50" name="question_9" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_9') }}"></textarea>
                            </label>

                        </div>

                        <!-- start previous / next buttons -->
                        <div class="form-footer d-flex">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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