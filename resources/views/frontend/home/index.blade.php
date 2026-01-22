@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="hero-slider">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay"></div>
                    <img src="{{ asset('frontend/assets/image/banner-2.jpeg') }}" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img src="{{ asset('frontend/assets/image/banner-1.jpg') }}" class="d-block w-100" alt="">
                </div>
                <div class="carousel-caption my-2">
                    <h1 class="carousel-caption-title">Build Your Bussiness and Careers</h1>
                    <p class="carousel-caption-para">Opportunities that actually matter</p>
                    <div class="search-hero-buttons">
                        <a href="#" class=" primary-btn">Browse Jobs</a>
                        <a href="#" class=" secondary-btn">Apply Now</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev"></button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next"></button>
        </div>
    </section>
    <section class="job-categories my-4">
        <div class="section-heading mt-4 pt-4">
            <h2 class="section-heading-title">Job Categoriess</h2>
            <p class="section-heading-para">Find out the suitable job for you!</p>
        </div>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="category-card my-2">
                        <div class="category-icon-circle">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <h6>Web & Software Dev</h6>
                        <div class="my-2 job-category-address">
                            <i class="categories-icon ri-map-pin-2-line"></i>
                            <span class="category-address">Bharatpur, chitwan</span>
                        </div>
                        <div class="job-count">
                            <i class="px-2 categories-icon ri-suitcase-fill"></i>
                            <span class="job-count-number">122 open jobs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section my-4 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('frontend/assets/image/about-us-bg.png') }}" alt="About Image"
                            class="about-image">
                        <div class="experience-badge">
                            <span>
                                10+ Years
                                <br>
                                Experience
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content p-4">
                        <span class="about-subtitle">ABOUT US</span>
                        <h2 class="about-title">Welcome to Samurai Blue</h2>
                        <div class="about-short">
                            Connecting talent with opportunity through a modern and trusted job platform.
                        </div>
                        <div class="about-desc">
                            Samurai Blue is designed to bridge the gap between job seekers and employers by
                            offering a streamlined, transparent, and skill-focused hiring experience.
                            We help candidates discover meaningful careers while enabling companies to
                            find the right talent faster and smarter.Samurai Blue is designed to bridge
                            the gap between job seekers and employers by offering a streamlined,
                            transparent, and skill-focused hiring experience.
                        </div>
                        <a href="#" class="blog-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="review">
        <div class="section-heading mt-4 pt-4">
            <h2 class="section-heading-title">reviews</h2>
            <p class="section-heading-para">our clients voices!!</p>
        </div>
        <div class="container my-4">
            <div class="row g-4 justify-content-center my-3">
                <div class="col-md-5 py-4">
                    <div class="review-card  p-4 ">
                        <div class="image-wrapper-review  ">
                            <img src="{{ asset('frontend/assets/image/why-us-img.jpg') }}" alt="">
                        </div>
                        <div class="review-text line-clamp-3 mt-4 pt-4 ">
                            This platform made job searching simple and stress-free. I received interview
                            calls within a week and finally landed a job that matches my skills.
                            </p>
                            <div class="review-footer flex-wrap">
                                <div class="text-start">
                                    <h6>Aayusha</h6>
                                    <small class="text-muted">International Job Seeker</small>
                                </div>
                                <div class="stars text-warning fs-6">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 py-4">
                    <div class="review-card p-4 ">
                        <div class="image-wrapper-review">
                            <img src="{{ asset('frontend/assets/image/why-us-img.jpg') }}" alt="">
                        </div>
                        <div class="review-text line-clamp-3 mt-4 pt-4 ">
                            This platform made job searching simple and stress-free. I received interview calls within a
                            week and finally landed a job that matches my skills.
                            </p>
                            <div class="review-footer flex-wrap">
                                <div class="text-start">
                                    <h6>Aayusha</h6>
                                    <small class="text-muted">International Job Seeker</small>
                                </div>
                                <div class="stars text-warning fs-6">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="see-btn-block">
                    <a href="#" class="see-all-btn">
                        View all
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
    </section>
    <section class="why-choose-us py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="image-wrapper position-relative">
                        <img src="{{ asset('frontend/assets/image/banner-2.jpeg') }}" class="main-img" alt="">
                        <img src="{{ asset('frontend/assets/image/why-us-img.jpg') }}" class="overlay-img"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mt-2">
                        Why Choose Us
                    </h2>
                    <p class="section-desc">
                        We connect the right talent with the right opportunities
                        through a smart, transparent, and people-focused hiring
                        platform.
                    </p>
                    <div class="feature-box d-flex  mb-4">
                        <div class="icon-circle">
                            <i class="ri-check-line"></i>
                        </div>
                        <div class="why-us-content">
                            <h5 class="why-us-title">Trusted by Job Seekers & Employers</h5>
                            <p class="why-us-para">Thousands of candidates and companies rely on our platform for accurate
                                job listings.</p>
                        </div>
                    </div>
                    <div class="feature-box d-flex mb-4">
                        <div class="icon-circle">
                            <i class="ri-check-line"></i>
                        </div>
                        <div class="why-us-content">
                            <h5 class="why-us-title">Fast & Transparent Hiring</h5>
                            <p class="why-us-para">Employers can connect directly with qualified candidates, streamline
                                hiring decisions</p>
                        </div>
                    </div>
                    <div class="feature-box d-flex mb-4">
                        <div class="icon-circle">
                            <i class="ri-check-line"></i>
                        </div>
                        <div class="why-us-content">
                            <h5 class="why-us-title">Smart Job Matching</h5>
                            <p class="why-us-para">Our advanced search and filtering tools help candidates find roles that
                                truly match their skills,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-section">
        <div id="process-heading" class="section-heading mt-4 pt-4">
            <h2 id="process-heading-title" class="section-heading-title">The process of job hunting</h2>
            <p id="process-heading-para" class="section-heading-para">Follow these steps to land your dream job</p>
        </div>
        <div class="process">
            <div class="process-step">
                <div class="circle">
                    <i class="ri-file-text-line"></i>
                </div>
                <p class="process-desc">Create a Resume</p>
            </div>
            <div class="process-step">
                <div class="circle">
                    <i class="ri-mail-send-line"></i>
                </div>
                <p class="process-desc">Receive a Scout</p>
            </div>
            <div class="process-step">
                <div class="circle">
                    <i class="ri-user-follow-line"></i>
                </div>
                <p class="process-desc">Attend Interviews</p>
            </div>
            <div class="process-step">
                <div class="circle">
                    <i class="ri-hand-coin-line"></i>
                </div>
                <p class="process-desc">Get Job Offer</p>
            </div>
        </div>
    </section>
    <section class="mission-vision py-4">
        <div class="section-heading my-4 py-4">
            <h2 class="section-heading-title">Our Mission and values</h2>
            <p class="section-heading-para">What we want our client to achieve.</p>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-4 col-lg-4 position-relative mb-5">
                    <img src="{{ asset('frontend/assets/image/mission.jpg') }}" class="icon mb-4" alt="Mission">
                    <h4 class="title">Our Mission</h4>
                    <p class="description">
                        To empower individuals with the right guidance, skills, and
                        opportunities to build a successful career in Japan while
                        maintaining a balance.
                    </p>
                </div>
                <div class="col-12 col-md-4 col-lg-4 position-relative mb-5">
                    <img src="{{ asset('frontend/assets/image/bulb.jpg') }}" class="icon mb-4" alt="Vision">
                    <h4 class="title">Our Vision</h4>
                    <p class="description">
                        To become a trusted bridge between global talent and Japanese
                        organizations by creating long-term professional and cultural
                        connections.
                    </p>
                </div>
                <div class="col-12 col-md-4 col-lg-4 position-relative mb-5">
                    <img src="{{ asset('frontend/assets/image/values.jpg') }}" class="icon mb-4" alt="Values">
                    <h4 class="title">Our Values</h4>
                    <p class="description">
                        Integrity, transparency, continuous support, and respect for
                        cultural diversity in every step of the journey. We are there for you
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section">
        <div class="section-heading my-4 py-4">
            <h2 class="section-heading-title">Our Blog</h2>
            <p class="section-heading-para">Find the latest news here.</p>
        </div>
        <div class="container">
            <div class="blog-block">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('frontend/assets/image/blog-2.jpg') }}" alt="Blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>by admin</span>
                                    <span>april 05, 2023</span>
                                </div>
                                <h5 class="blog-title">
                                    Finding the Right Job in Japan Starts with the Right Platform
                                </h5>
                                <p class="blog-desc line-clamp-3">
                                    Finding a job in Japan can feel overwhelming, especially for foreign workers and
                                    students navigating language barriers, visa rules, and unfamiliar hiring systems.
                                    Samurai Blue was created to simplify that journey. </p>
                                <a href="#" class="blog-read">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('frontend/assets/image/blog-1.jpg') }}" alt="Blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>by admin</span>
                                    <span>april 05, 2023</span>
                                </div>
                                <h5 class="blog-title">
                                    Top Part-Time Jobs for International Students in Japan
                                </h5>
                                <p class="blog-desc line-clamp-3">
                                    Balancing studies and work is a reality for many international students in Japan.
                                    Choosing the right part-time job not only supports your finances but also builds
                                    valuable experience.

                                    Popular student-friendly jobs include convenience store staff, restaurant assistants,
                                    hotel housekeeping, warehouse packing, and delivery support roles. These jobs offer
                                    flexible hours and help improve basic Japanese communication skills. </p>
                                <a href="#" class="blog-read">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="{{ asset('frontend/assets/image/blog-3.jpg') }}" alt="Blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>by admin</span>
                                    <span>april 05, 2023</span>
                                </div>
                                <h5 class="blog-title">
                                    Understanding SSW Visa Job Opportunities in Japan
                                </h5>
                                <p class="blog-desc line-clamp-3">
                                    The Specified Skilled Worker (SSW) visa opens doors to stable employment in key Japanese
                                    industries facing labor shortages. From food services and caregiving to manufacturing
                                    and cleaning services, the SSW visa provides long-term career possibilities. </p>
                                <a href="#" class="blog-read">READ MORE</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="see-btn-block my-4 pt-4">
                <a href="./blog.html" class="see-all-btn">
                    View all
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
