<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TEDx JumierahBeachPark</title>
    <meta name="description" content="JumierahBeachPark, TED, TEDx, talk, event, conference, UAE, dubai, jumeirah, park" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_main/assets/icons/TED.png') }}" /> -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/tiny-slider.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('assets_main/assets/css/glightbox.min.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/multistepsform.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- /End Preloader -->

    <!-- Preloader -->
    <div id="preloaderted">

    </div>
    <!-- /End Preloader -->

    @include('includes.header')

    <!--content-->
    @yield('content')


    <!-- Start Footer Area -->
    @include('includes.footer')
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    <a href="https://wa.me/971507728672?text=Hello,%20I%20would%20like%20to%20connect." target="_blank" class="scroll-top me-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
        </svg>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets_main/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/tiny-slider.js') }}"></script>
    <!-- <script src="{{ asset('assets_main/assets/js/glightbox.min.js') }}"></script> -->
    <script src="{{ asset('assets_main/assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/main.js') }}"></script>
    <!-- <script src="js/ScrollMagic.min.js"></script> -->




    <!-- <script script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver%2CIntersectionObserverEntry">
    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->


    <!--for the multi form-->
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("step");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("signUpForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = true; //this was false, i changed it 
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <script>
        var loader = document.getElementById('preloaderted');
        window.addEventListener("load", function() {
            loader.style.display = 'none';
        });
    </script>

    <script src="{{ asset('assets_main/assets/carosel/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/popper.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/main.js') }}"></script>
    <!--for the sweet alert-->
    @include('sweetalert::alert')
</body>

</html>