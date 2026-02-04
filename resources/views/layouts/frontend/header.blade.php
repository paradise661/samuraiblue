<header>
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <div class="d-flex align-items-center">
                <span>
                    <i class="header-icon ri-phone-fill"></i>
                    +977-987654321
                </span>
                <span class="divider">|</span>
                <span>
                    <i class="ri-map-pin-2-fill"></i>
                    Kathmandu, Nepal
                </span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="">info@yourcompany.com</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img class="logo-img" src="{{ $settings['site_main_logo'] }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown header-dropdown">
                        <a class="nav-link" href="{{ route('frontend.about') }}" role="button">
                            About
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.about') }}">Company Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.team') }}">Our Team</a>
                            </li>
                            {{-- <li>
                                <a class="dropdown-item" href="">Our Mission</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.testimonial') }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.event') }}">Jobs</a>
                    </li>
                    <li class="nav-item dropdown header-dropdown">
                        <a class="nav-link" href="{{ route('frontend.service') }}" role="button">
                            Services
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($footer_services as $services)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('frontend.servicesingle', $services->slug) }}">{{ $services->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.blog') }}">Blog</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-4">
                    <li class="nav-item">
                        <a href="{{ route('frontend.contact') }}" class="header-btn header-btn-outline">
                            Contact Us
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
</header>
