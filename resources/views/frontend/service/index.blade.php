@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? ($service_page->title ?? ''),
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <section class="position-relative" style="height: 420px;">
        <img src="{{ $service_page->banner_image }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
            alt="service Banner">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));"></div>
        <div class="container h-100 position-relative d-flex align-items-center">
            <div class="text-white">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-white-50 mb-3">
                        <li class="breadcrumb-item">
                            <a href="{{ route('frontend.home') }}" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-white text-decoration-none">{{ $service_page->title ?? '' }}</a>
                        </li>
                    </ol>
                </nav>
                <h1 class="fw-bold display-5">{{ $service_page->title ?? '' }}</h1>
            </div>
        </div>
    </section>
    <section class="features-section py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($services as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card text-center">
                            <div class="icon-box">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h5 class="feature-card-title">{{ $item->title }}</h5>
                            <p class="feature-card-desc">
                                {{ $item->short_description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
