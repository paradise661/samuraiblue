<header class="main-header header-style-one header-1">
    <!-- Header Lower -->
    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Box-->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo">
                        <a href="index.html"><img
                                src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('frontend/assets/images/logo.png') }}"
                                alt="logo" title="samuraiblue" /></a>
                    </div>
                </div>

                <div class="outer-box">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li class="current dropdown">
                                <a href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('frontend.about') }}">About</a>
                                {{-- <ul>
                                    <li><a href="page-about.html">Company's Profile</a></li>
                                    <li><a href="page-testimonial.html">Testimonial</a></li>
                                    <li><a href="page-faq.html">FAQ</a></li>
                                </ul> --}}
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('frontend.service') }}">Services</a>
                                <ul>
                                    <li><a href="page-services.html">Student Support in Japan
                                        </a></li>
                                    <li><a href="page-service-details.html">Job Placement & Training
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('frontend.studentjourney') }}">Student Journey</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('frontend.testimonial') }}">Testimonials</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('frontend.faq') }}">FAQ</a>
                            </li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="ui-btn-outer">
                        <div class="header-contact">
                        </div>
                    </div>
                    <a href="{{ route('frontend.contact') }}" class="theme-btn btn-style-one">Apply Now</a>
                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('frontend.home') }}"><img
                            src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('frontend/assets/images/logo.png') }}"
                            alt="" /></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+92880098670">{{ $settings['site_phone'] }}</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:help@company.com">{{ $settings['site_email'] }}</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    {{-- <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div> --}}
                </li>
            </ul>

            <ul class="social-links">
                @foreach ($socials as $social)
                    <li>
                        <a href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a>
                    </li>
                @endforeach
                {{-- <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li> --}}
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="index.html"><img
                            src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('frontend/assets/images/logo.png') }}"
                            alt="img" /></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>
<!--End Main Header -->
