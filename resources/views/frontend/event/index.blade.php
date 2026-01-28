@section('seo')
    @include('frontend.seo', [
        'name' => $event_page->seo_title ?? '',
        'title' => $event_page->seo_title ?? ($event_page->title ?? ''),
        'description' => $event_page->meta_description ?? '',
        'keyword' => $event_page->meta_keywords ?? '',
        'schema' => $event_page->seo_schema ?? '',
        'created_at' => $event_page->created_at ?? now(),
        'updated_at' => $event_page->updated_at ?? now(),
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="position-relative" style="height: 420px;">
        <img src="{{ $event_page->banner_image ?? '' }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
            alt="job Banner">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));"></div>
        <div class="container h-100 position-relative d-flex align-items-center">
            <div class="text-white">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-white-50 mb-3">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-white text-decoration-none">Jobs</a>
                        </li>
                        <!-- <li class="breadcrumb-item active text-white" aria-current="page">
                                                            find a job at sumarai blue
                                                        </li> -->
                    </ol>
                </nav>
                <h1 class="fw-bold display-5">{{ $event_page->title ?? '' }}</h1>
            </div>
        </div>
    </section>
    <section class="featured-jobs">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Featured Jobs</h2>
                <p>Hand-picked opportunities from trusted employers</p>
            </div>
            <div class="row g-4">
                @foreach ($events as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="job-card">
                            <div class="job-header">
                                <h3>Restaurant Staff</h3>
                                <span class="job-type">Full-Time</span>
                            </div>
                            <p class="company">{{$item->name}}</p>
                            <div class="job-meta">
                                <span>
                                    <i class="ri-map-pin-2-fill"></i> {{$item->location}}
                                </span>
                                <span>
                                    <i class="ri-money-dollar-circle-line"></i> ¥200,000 / month
                                </span>
                            </div>
                            <a href="#" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3>Restaurant Staff</h3>
                            <span class="job-type">Full-Time</span>
                        </div>
                        <p class="company">Sakura Dining Pvt. Ltd.</p>
                        <div class="job-meta">
                            <span>
                                <i class="ri-map-pin-2-fill"></i> Tokyo, Japan
                            </span>
                            <span>
                                <i class="ri-money-dollar-circle-line"></i> ¥200,000 / month
                            </span>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3>Restaurant Staff</h3>
                            <span class="job-type">Full-Time</span>
                        </div>
                        <p class="company">Sakura Dining Pvt. Ltd.</p>
                        <div class="job-meta">
                            <span>
                                <i class="ri-map-pin-2-fill"></i> Tokyo, Japan
                            </span>
                            <span>
                                <i class="ri-money-dollar-circle-line"></i> ¥200,000 / month
                            </span>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3>Restaurant Staff</h3>
                            <span class="job-type">Full-Time</span>
                        </div>
                        <p class="company">Sakura Dining Pvt. Ltd.</p>
                        <div class="job-meta">
                            <span>
                                <i class="ri-map-pin-2-fill"></i> Tokyo, Japan
                            </span>
                            <span>
                                <i class="ri-money-dollar-circle-line"></i> ¥200,000 / month
                            </span>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3>Restaurant Staff</h3>
                            <span class="job-type">Full-Time</span>
                        </div>
                        <p class="company">Sakura Dining Pvt. Ltd.</p>
                        <div class="job-meta">
                            <span>
                                <i class="ri-map-pin-2-fill"></i> Tokyo, Japan
                            </span>
                            <span>
                                <i class="ri-money-dollar-circle-line"></i> ¥200,000 / month
                            </span>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3>Restaurant Staff</h3>
                            <span class="job-type">Full-Time</span>
                        </div>
                        <p class="company">Sakura Dining Pvt. Ltd.</p>
                        <div class="job-meta">
                            <span>
                                <i class="ri-map-pin-2-fill"></i> Tokyo, Japan
                            </span>
                            <span>
                                <i class="ri-money-dollar-circle-line"></i> ¥200,000 / month
                            </span>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div> --}}
            </div>
            <!-- <div class="text-center mt-5">
                    <a href="#" class="view-all-btn">View All Jobs</a>
                </div> -->
        </div>
    </section>
    {{-- <section class="search-job">
            <div class="final-banner">
                <img src="{{ $event_page->banner_image }}" alt="Job Search Banner" class="final-banner-image">
                <div class="final-banner-overlay">
                    <div class="final-banner-content">
                        <h1>Find the Right Job. Start Your Career.</h1>
                        <p>Browse verified job opportunities and get professional support for your career journey.</p>
                        <div class="final-banner-buttons">
                            <a href="#" class="secondary-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
@endsection
