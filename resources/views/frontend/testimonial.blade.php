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
    <section class="page-title" style="background-image: url(images/inner/page-title-bg.jpg);">
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
    <section class="testimonial-section-3 fix section-padding">
        <div class="auto-container">
            <div class="swiper testimonial-slider-3">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)

                        <div class="swiper-slide">
                            <div class="testimonial-wrapper-3">
                                <div class="mask-shape-style-3">
                                    <img src="{{ asset('frontend/assets/images/home-3/testimonial/mask-shape.png') }}" alt="img">
                                </div>
                                <div class="image-box-style-3">
                                    <div class="quate">
                                        <i class="flaticon-finance-Quote"></i>
                                    </div>
                                    <div class="image">
                                        <img src="{{ $testimonial->image }}" alt="Image">
                                        {{-- <div class="planet-shape">
                                            <img src="{{ asset('frontend/assets/images/home-3/testimonial/planet.png') }}" alt="img">
                                        </div> --}}
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="content-box-style-3">
                                    <h3 class="text">{!! $testimonial->description !!}</h3>
                                    <h3 class="title">{{ $testimonial->name }} / <span>{{ $testimonial->position }}</span></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="array-button justify-content-end">
                  <button class="array-prev"><i class="fa-regular fa-arrow-left"></i></button>
                  <button class="array-next"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
@endsection
