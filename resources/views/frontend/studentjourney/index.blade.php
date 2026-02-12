@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo', [
    'name' => $studentjourney->seo_title ?? '',
    'title' => $studentjourney->seo_title ?? $studentjourney->title ?? '',
    'description' => $studentjourney->meta_description ?? '',
    'keyword' => $studentjourney->meta_keywords ?? '',
    'schema' => $studentjourney->seo_schema ?? '',
    'created_at' => $studentjourney->created_at,
    'updated_at' => $studentjourney->updated_at,
])
@endsection
@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/inner/page-title-bg.jpg);">
            <div class="auto-container">
                <div class="title-outer">
            <ul class="page-breadcrumb wow fadeInUp" data-wow-delay=".3s">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li><a href="{{ route('frontend.home') }}">{{ $studentjourney->title ?? 'FAQ' }}</a></li>
            </ul>
            <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $studentjourney->title ?? 'FAQ' }}</h1>
        </div>
      </div>
    </section>

    <!-- Service Section Start -->
    <section class="service-section-2 section-padding fix pt-0">
        <div class="auto-container">
            {{-- <div class="sec-title text-center">
                <h6 class="sub-title wow fadeInUp">
                    <span class="triangle triangle1"></span>
                    <span class="triangle triangle2"></span>
                    What We Do
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">We Cover All Business Services</h2>
            </div> --}}
            <div class="row">
                @foreach ($studentsteps as $key => $studentstep)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-card-items-2">
                            <div class="service-icon">
                                <div class="icon">
                                    {{-- <i class="flaticon-business-028-briefcase"></i> --}}
                                    <img src="{{ $studentstep->image }}">
                                    <div class="service-triangle"></div>
                                </div>
                                <span class="number">
                                    0{{ $key + 1 }}
                                </span>
                            </div>
                            <div class="content">
                                <h3><a href="page-service-details.html">{{ $studentstep->title }}</a></h3>
                                <p>
                                    {!! $studentstep->description !!}
                                </p>
                            </div>
                            {{-- <div class="arrow-shape-2 float-bob-x">
                                <img src="{{ asset('frontend/assets/images/home-2/service-icon/arrow-shape.png') }}" alt="img">
                            </div> --}}
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- <div class="service-know-box wow fadeInUp" data-wow-delay=".3s">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="34" viewBox="0 0 24 34" fill="none">
                    <defs>
                        <linearGradient id="paint0_linear_1_745" x1="11.9987" y1="0.333008" x2="11.9987" y2="33.6663" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#099696"/>
                        <stop offset="1" stop-color="#B2E66E"/>
                        </linearGradient>
                    </defs>
                    <path d="M11.9987 13.6663H23.6654L5.33203 33.6663L10.332 18.6663H0.332031L13.6654 0.333008L11.9987 13.6663Z"
                            fill="url(#paint0_linear_1_745)" />
                    </svg>

                </div>
                <p>We Strive To Lead The way In  The business <a href="page-services.html">Know All Services <i class="fa-regular fa-arrow-right"></i></a></p>
            </div> --}}
        </div>
    </section>

@endsection