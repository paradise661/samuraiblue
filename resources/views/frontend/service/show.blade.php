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
    @if ($service_page)
        <section class="page-title" style="background-image: url({{ $service_page->banner_image }});">
            <div class="auto-container">
                <div class="title-outer">
                    <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li><a href="{{ route('frontend.service') }}">{{ $service_page->title ?? '' }}</a></li>
                    </ul>
                    <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $service_page->title ?? '' }}</h1>
                </div>
            </div>
        </section>
    @endif
    <section class="bg-white blog-detail-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 ">
                        <img src="{{ $servicesingle->image }}" class="card-img-top  object-fit-cover" alt="Blog Image">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-3">{{ $servicesingle->title }}</h2>
                            <div class="text-muted text-justify lh-lg">
                                {!! $servicesingle->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm sticky-sidebar">
                        <div class="card-body">
                            <h4 class="fw-semibold mb-4">Popular Services</h4>
                            @foreach ($services as $service)
                                <a href="{{ route('frontend.servicesingle', $service->slug) }}"
                                    class="d-flex stretched-card-link align-items-center mb-3 text-decoration-none text-dark">
                                    <img src="{{ $service->image }}" class="rounded"
                                        style="width: 70px; height: 70px; object-fit: cover;" alt="{{ $service->title }}">
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium hover-text-primary">
                                            {{ $service->title }}
                                        </h6>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
