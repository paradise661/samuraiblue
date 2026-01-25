@section('seo')
    @include('frontend.seo', [
        'name' => $about_us->seo_title ?? '',
        'title' => $about_us->seo_title ?? $about_us->title,
        'description' => $about_us->meta_description ?? '',
        'keyword' => $about_us->meta_keywords ?? '',
        'schema' => $about_us->seo_schema ?? '',
        'created_at' => $about_us->created_at,
        'updated_at' => $about_us->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="about-section my-4 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image-wrapper">
                        <img src="{{ $about_us->banner_image }}" alt="About Image" class="about-image">
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
                        <span class="about-subtitle">{{ $about_us->title }}</span>
                        <h2 class="about-title"> {{ $about_us->short_description }}</h2>
                        <div class="about-desc">
                            {!! $about_us->description !!}
                        </div>
                        {{-- <a href="#" class="blog-btn">See More</a> --}}
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
                        <img src="./images/banner-2.jpeg" class="main-img" alt="">
                        <img src="./images/why-us-img.jpg" class="overlay-img" alt="">
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
    <section class="team-section pb-5">
        <div class="container">
            <div class="section-heading py-4">
                <h2 class="section-heading-title">Our Team </h2>
                <p class="section-heading-para">Dedicated members of Samurai Blue</p>
            </div>
            <div class="row g-4">
                <!-- Team Member -->
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <img src="{{ $team->image }}" alt="Alex dhakal">
                            <div class="team-info py-4">
                                <h5>{{ $team->name }}</h5>
                                <p>{{ $team->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <img src="./images/about-us-bg.png" class="icon mb-4" alt="Mission">
                    <h4 class="title">Our Mission</h4>
                    <p class="description">
                        To empower individuals with the right guidance, skills, and
                        opportunities to build a successful career in Japan while
                        maintaining a balanced and fulfilling life.
                    </p>
                </div>
                <div class="col-12 col-md-4 col-lg-4 position-relative mb-5">
                    <img src="./images/about-us-bg.png" class="icon mb-4" alt="Vision">
                    <h4 class="title">Our Vision</h4>
                    <p class="description">
                        To become a trusted bridge between global talent and Japanese
                        organizations by creating long-term professional and cultural
                        connections.
                    </p>
                </div>
                <div class="col-12 col-md-4 col-lg-4 position-relative mb-5">
                    <img src="./images/about-us-bg.png" class="icon mb-4" alt="Values">
                    <h4 class="title">Our Values</h4>
                    <p class="description">
                        Integrity, transparency, continuous support, and respect for
                        cultural diversity in every step of the journey. We are there for you
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
