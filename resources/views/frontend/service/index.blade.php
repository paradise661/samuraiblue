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
        <section class="page-title"
            style="background-image: url('{{ optional($service_page)->banner_image
                ? asset($service_page->banner_image)
                : asset('frontend/assets/images/default-banner.jpg') }}');">
            <div class="auto-container">
                <div class="title-outer">
                    <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li>{{ $service_page->title ?? '' }}</li>
                    </ul>
                    <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $service_page->title ?? '' }}</h1>
                </div>
            </div>
        </section>
    @endif
    <section class="service-section section-padding section-bg fix bg-cover"
        style="background-image: url('images/home-1/service/service-bg.jpg')">
        <span class="ellipse-bg"></span>
        <div class="auto-container">
            {{-- <div class="sec-title text-center">
                <h6 class="sub-title wow fadeInUp">
                    <span class="triangle triangle1"></span>
                    <span class="triangle triangle2"></span>
                    {{ $settings['services_title'] ?? '' }}
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ $settings['services_subtitle'] ?? '' }}</h2>
            </div> --}}
        </div>
        <div class="service-wrapper">
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-card-items">
                            <div class="icon">
                                {{-- <i class="{{ $item->icon ?? '' }}"></i> --}}
                                    <img src="{{ $item->image_1 }}">
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('frontend.servicesingle', $item->slug) }}"><div class="line-clamp-1">{{ $item->title ?? ''}}</div></a></h3>
                                <p class="text-justify line-clamp-4">{{ $item->short_description ?? '' }}
                                </p>
                                <a href="{{ route('frontend.servicesingle', $item->slug) }}" class="link-btn"><i
                                        class="lnr-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
