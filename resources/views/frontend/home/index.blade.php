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

        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true">

            <div class="carousel-inner">

                @foreach ($sliders as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="overlay"></div>

                        <img src="{{ $item->image }}" class="d-block w-100" alt="">

                        <div class="carousel-caption my-2">
                            <h1 class="carousel-caption-title">{{ $item->title }}</h1>
                            <p class="carousel-caption-para">{{ $item->short_description }}</p>

                            <div class="search-hero-buttons">
                                <a href="{{ route('frontend.event') }}" class="primary-btn">Browse Jobs</a>
                                <a href="{{ route('frontend.contact') }}" class="secondary-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev"></button>

            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next"></button>

        </div>-
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
    <section class="about-section py-5">
        <div class="container my-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image-wrapper">
                        <img src="{{ $about_us->banner_image ?? '' }}" alt="About Image" class="about-image">
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
                        <span class="about-subtitle">{{ $about_us->title ?? '' }}</span>
                        <h2 class="about-title"> {{ $about_us->short_description ?? '' }}</h2>
                        <div class="about-desc">
                            {!! $about_us->description ?? '' !!}
                        </div>
                        <a href="{{ route('frontend.about') }}" class="blog-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-us py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="image-wrapper position-relative">
                        <img src="{{ $why_choose_us->image }}" class="main-img" alt="">
                        <img src="{{ asset('frontend/assets/image/why-us-img.jpg') }}" class="overlay-img"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mt-2">
                        {{ $why_choose_us->title ?? '' }}
                    </h2>
                    <div class="custom-list ">
                        {!! $why_choose_us->description ?? '' !!}
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
    <section class="review-section py-5">
        <div class="container">
            <div class="section-heading text-center pb-4 mb-5">
                <h2 class="section-heading-title">{{ $settings['testioninal_title'] ?? ' ' }}</h2>
                <p class="section-heading-para">{{ $settings['testioninal_subtitle'] ?? ' ' }}</p>
            </div>
            <div class="row g-4">
                @foreach ($testimonials as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="review-card text-center p-4">
                            <img src="{{ $item->image }}" class="review-img mb-3" alt="Reviewer">
                            <div class="review-content text-muted line-clamp-3 mb-3">
                                {!! $item->description !!}
                            </div>
                            <h6 class="mb-1">{{ $item->name }}</h6>
                            <div class="stars text-warning fs-6">
                                <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="see-btn-block my-4 pt-4">
                    <a href="{{ route('frontend.testimonial') }}" class="see-all-btn">
                        View all
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
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
                    <img src="{{ asset('frontend/assets/image/2606563_5898.jpg') }}" class="icon mb-4" alt="Mission">
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
            <h2 class="section-heading-title">{{ $settings['blogs_title'] ?? '' }}</h2>
            <p class="section-heading-para">{{ $settings['blogs_subtitle'] ?? '' }}</p>
        </div>
        <div class="container">
            <div class="blog-block">
                <div class="row g-4">
                    @foreach ($blogs as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="{{ $item->image }}" alt="Blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span>{{ $item->short_description }}</span>
                                        <span>{{ $item->created_at->format('d M Y') }}</span>
                                    </div>
                                    <h5 class="blog-title">
                                        {{ $item->title }}
                                    </h5>
                                    <div class="blog-desc line-clamp-3">
                                        {!! $item->description !!} </div>
                                    <a href="{{ route('frontend.blogsingle', $item->slug) }}" class="blog-read">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="see-btn-block my-4 pt-4">
                <a href="{{ route('frontend.blog') }}" class="see-all-btn">
                    View all
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
