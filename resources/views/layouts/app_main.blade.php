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
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/multistepsform.css') }}" />

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

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets_main/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/main.js') }}"></script>
    <script src="js/ScrollMagic.min.js"></script>
    
   


    <script script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver%2CIntersectionObserverEntry">
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <script>
        //========= glightbox
        
        //========= testimonial 
        
    </script>
    <script>
       
    </script>

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
    <!--for the sweet alert-->
    @include('sweetalert::alert')
</body>

</html>