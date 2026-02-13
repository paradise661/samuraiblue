@section('seo')
    @include('frontend.seo', [
        'name' => $faq_page->seo_title ?? '',
        'title' => $faq_page->seo_title ?? $faq_page->title ?? '',
        'description' => $faq_page->meta_description ?? '',
        'keyword' => $faq_page->meta_keywords ?? '',
        'schema' => $faq_page->seo_schema ?? '',
        'created_at' => $faq_page->created_at,
        'updated_at' => $faq_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{$faq_page->banner_image ?? ''}});">
      <div class="auto-container">
        <div class="title-outer">
            <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li><a href="{{ route('frontend.home') }}">{{ $faq_page->title ?? 'FAQ' }}</a></li>
            </ul>
            <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $faq_page->title ?? 'FAQ' }}</h1>
        </div>
      </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding">
        <div class="auto-container">
            <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-left-items-1">
                            <div class="sec-title mb-0">
                                <h6 class="sub-title wow fadeInUp">
                                    <span class="triangle triangle1"></span>
                                    <span class="triangle triangle2"></span>
                                    {{ $faq_page->title }}
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    {{ $faq_page->short_description }}
                                </h2>
                            </div>
                            <div class="faq-image">
                                <img src="{{ $faq_page->image_1 }}" alt="img" class="wow img-custom-anim-left">
                                {{-- <div class="shape-1 float-bob-y">
                                    <img src="images/home-1/faq/shape-01.png" alt="img">
                                </div>
                                <div class="shape-2 float-bob-x">
                                    <img src="images/home-1/faq/shape-02.png" alt="img">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-content-1">
                            <ul class="accordion-box">
                                <!--Block-->
                                @foreach ($faqs as $key => $faq)
                                <li class="accordion block {{ $key == 0 ? 'active-block' : '' }} wow fadeInUp"
                                    data-wow-delay="{{ $key * 0.2 }}s">
                                    <div class="acc-btn {{ $key == 0 ? 'active' : '' }}">
                                        {{ $faq->question }}
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content {{ $key == 0 ? 'current' : '' }}">
                                        <div class="content">
                                            <div class="text">{!! $faq->answer !!}</div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
