@section('seo')
    @include('frontend.seo', [
        'name' => $testimonial_page->seo_title ?? '',
        'title' => $testimonial_page->seo_title ?? ($testimonial_page->title ?? ''),
        'description' => $testimonial_page->meta_description ?? '',
        'keyword' => $testimonial_page->meta_keywords ?? '',
        'schema' => $testimonial_page->seo_schema ?? '',
        'created_at' => $testimonial_page->created_at,
        'updated_at' => $testimonial_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ $testimonial_page->banner_image ?? '' }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a href="{{ route('frontend.home') }}">{{ $testimonial_page->title ?? 'Testimonials' }}</a></li>
                </ul>
                <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $testimonial_page->title ?? 'Testimonials' }}</h1>
            </div>
        </div>
    </section>


    <!--Testimonial Section -->
    <section class="testimonial-section fix section-padding">
        <div class="auto-container">
            <div class="testimonial-wrapper bg-cover">
                <div class="testimonial-wrapper-2">
                    <div class="swiper testimonial-slider-2">
                        <div class="swiper-wrapper">
                            @if ($testimonials && $testimonials->count())
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="testimonial-card-item" data-name="{{ $testimonial->name ?? 'Name' }}"
                                            data-position="{{ $testimonial->position ?? 'Student' }}"
                                            data-image="{{ $testimonial->image }}">
                                            <div class="client-item">
                                                <div class="client-image">
                                                    <img src="{{ $testimonial->image }}" alt="img">
                                                </div>
                                                <div class="info-text">
                                                    <h5>{{ $testimonial->name ?? 'name' }}</h5>
                                                    <span>{{ $testimonial->position ?? 'student' }}</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="quote-icon">
                                                    <i class="flaticon-finance-Quote"></i>
                                                    <div class="test-triangle"></div>
                                                </div>
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="line-clamp-4 text-justify testimonial-text"
                                                    data-full="{!! e($testimonial->description) !!}">
                                                    {!! $testimonial->description !!}
                                                </div>
                                                <button type="button" class="read-more-btn-testimonial d-none"
                                                    data-readmore>
                                                    Read More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="swiper-dot mt-5 mb-0">
                            <div class="dot2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection
