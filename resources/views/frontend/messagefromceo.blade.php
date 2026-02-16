@section('seo')
    @include('frontend.seo', [
        'name' => $message_page->seo_title ?? '',
        'title' => $message_page->seo_title ?? $message_page->title,
        'description' => $message_page->meta_description ?? '',
        'keyword' => $message_page->meta_keywords ?? '',
        'schema' => $message_page->seo_schema ?? '',
        'created_at' => $message_page->created_at,
        'updated_at' => $message_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    {{-- @if ($message_page)
        <div class="hero-banner2 position-relative ">
            <div class="row g-0 text-bannner-section">
                <div class="col-md-6 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center page-banner-lft px-4">
                        <h1 class="text-white font-weight-bold">{{ $message_page->title ?? 'About Us' }}</h1>
                        <p class="breadcrumb-text text-white">
                            <a href="{{ route('frontend.home') }}" class="text-white text-decoration-none">Home</a> /
                            <a href="#"
                                class="text-white text-decoration-none">{{ $message_page->title ?? 'About Us' }}</a>

                        </p>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container-banner">
                        <div class="img-wrapper-2">
                            <img src="{{ asset($message_page->banner_image) }}" alt="Creative Design"
                                class="background-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
    @if ($message_page)
        <section class="page-title"
            style="background-image: url('{{ optional($message_page)->banner_image
                ? asset($message_page->banner_image)
                : asset('frontend/assets/images/default-banner.jpg') }}');">
            <div class="auto-container">
                <div class="title-outer">
                    <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li>{{ $message_page->title ?? '' }}</li>
                    </ul>
                    <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $message_page->title ?? '' }}</h1>
                </div>
            </div>
        </section>
    @endif
    {{-- about us section --}}
    {{-- about us section --}}
    <section class="about-us-section py-5">
        <div class="container">
            <div class="row">
                {{-- Image --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="fade-right"
                    data-aos-duration="3000">
                    <div class="about-us-img-ceo">
                        <img style="    height: 800px;
                                       object-fit: cover;"
                              src="{{ asset($message_page->image_1) }}"
                            alt="{{ $message_page->title }}">
                    </div>
                </div>
                {{-- Content --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="fade-left"
                    data-aos-duration="3000">
                    <div class="service-content-container">
                        <h6 class="my-2">{{ $message_page->title ?? 'About us' }}</h6>
                        <h3 class="my-2">{{ $message_page->short_description }}</h3>
                        <p class="text-css-counter">
                            {!! $message_page->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
