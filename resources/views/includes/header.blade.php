<!-- Start Header Area -->
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('main') }}">
                            <img src="{{ asset('assets_main/assets/images/logo/logo-white.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item ">
                                    <a href="{{ route('main') }}" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('aboutTed') }}" aria-label="Toggle navigation">About</a>
                                </li>

                                <!--<li class="nav-item">
                                    <a href="{{ route('main') }}#speakers" aria-label="Toggle navigation">Speakers</a>
                                </li>-->
                                <!--<li class="nav-item">
                                    <a href="{{ route('sponsers') }}" aria-label="Toggle navigation">Partners</a>
                                </li>-->
                                <li class="nav-item">
                                    <a href="{{ route('members') }}" aria-label="Toggle navigation">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a a href="{{ route('main') }}#partners" aria-label="Toggle navigation">Partners</a>
                                </li>

                                <li class="nav-item">
                                    <a a href="{{ route('home') }}" aria-label="Toggle navigation">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Join Us</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="{{ route('register') }}">Speakers</a></li>
                                        <li class="nav-item"><a href="{{ route('volunteer') }}">Volunteers</a></li>
                                        <li class="nav-item"><a href="{{ route('partner') }}">Partners</a></li>

                                    </ul>
                                </li>
                                <!--<li class="nav-item">
                                    <a href="{{ route('faq') }}" aria-label="Toggle navigation">Be in Event</a>
                                </li>-->
                                <li class="nav-item">
                                    <a href="#footer" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        <div class="button">
                            <a href="https://www.ted.com/tedx/events/57896" class="btn" target="_blank">@TED.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right ms-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
<!-- End Header Area -->