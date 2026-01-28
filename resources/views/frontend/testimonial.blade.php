@section('seo')
    @include('frontend.seo', [
        'name' => $testimonial_page->seo_title ?? '',
        'title' => $testimonial_page->seo_title ?? $testimonial_page->title ?? '',
        'description' => $testimonial_page->meta_description ?? '',
        'keyword' => $testimonial_page->meta_keywords ?? '',
        'schema' => $testimonial_page->seo_schema ?? '',
        'created_at' => $testimonial_page->created_at,
        'updated_at' => $testimonial_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    @if ($testimonial_page)
          <section class="position-relative" style="height: 420px;">
        <img src="{{$testimonial_page->image}}"
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
                <h1 class="fw-bold display-5">{{ $testimonial_page->title }}</h1>
            </div>
        </div>
    </section>
    @endif
      <section class="review-section py-5">
        <div class="container">
            <div class="section-heading text-center pb-4 mb-5">
                <h2 class="section-heading-title">Reviews</h2>
                <p class="section-heading-para">Our clients voices!!</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="review-card text-center p-4 shadow-sm">
                        <img src="{{ asset('frontend/assets/image/blog-3.jpg') }}" class="review-img mb-3"
                            alt="Reviewer">
                        <div class="review-content text-muted mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </div>
                        <h6 class="mb-1">Olivia Wilson</h6>
                        <div class="stars text-warning fs-6">
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="review-card text-center p-4 shadow-sm">
                        <img src="{{ asset('frontend/assets/image/blog-3.jpg') }}" class="review-img mb-3"
                            alt="Reviewer">
                        <div class="review-content text-muted mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </div>
                        <h6 class="mb-1">James Carter</h6>
                        <div class="stars text-warning fs-6">
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="review-card text-center p-4 shadow-sm">
                        <img src="{{ asset('frontend/assets/image/why-us-img.jpg') }}" class="review-img mb-3"
                            alt="Reviewer">
                        <div class="review-content text-muted mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </div>
                        <h6 class="mb-1">Sophia Brown</h6>
                        <div class="stars text-warning fs-6">
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
