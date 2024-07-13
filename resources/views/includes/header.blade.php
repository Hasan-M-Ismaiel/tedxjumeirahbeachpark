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
                                    <a href="{{ route('main') }}#about" aria-label="Toggle navigation">About TED/TEDx</a>
                                </li>
                                
                                <!--<li class="nav-item">
                                    <a href="{{ route('main') }}#speakers" aria-label="Toggle navigation">Speakers</a>
                                </li>-->
                                <!--<li class="nav-item">
                                    <a href="{{ route('sponsers') }}" aria-label="Toggle navigation">Partners</a>
                                </li>-->
                                <li class="nav-item">
                                    <a href="{{ route('main') }}#members" aria-label="Toggle navigation">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Join Us</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="{{ route('register') }}">As Speaker</a></li>
                                        <li class="nav-item"><a href="{{ route('volunteer') }}">As Volunteer</a></li>
                                        <li class="nav-item"><a href="{{ route('partner') }}">As Partner</a></li>
                                        <li class="nav-item"><a href="{{ route('other') }}">other role</a></li>
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
                            <a href="https://www.ted.com/tedx/events/57896" class="btn">@TED.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-link-45deg ms-2" viewBox="0 0 16 16">
                                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z" />
                                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z" />
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