@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="position-relative" style="height: 420px;">
        <img src="./images/office-skyscrapers-business-district.jpg"
            class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="Blog Banner">
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
                            <a href="#" class="text-white text-decoration-none">Blog</a>
                        </li>
                        <!-- <li class="breadcrumb-item active text-white" aria-current="page">
                                    find a job at sumarai blue
                                </li> -->
                    </ol>
                </nav>
                <h1 class="fw-bold display-5"> Learn about your work visa type</h1>
            </div>
        </div>
    </section>
    <section class="blog-section my-4 py-4">
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
                                <a href="" class="blog-read">READ MORE</a>
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
        </div>
    </section>
@endsection
