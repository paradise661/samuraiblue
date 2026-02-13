@section('seo')
    @include('frontend.seo', [
    'name' => $about_us->seo_title ?? '',
    'title' => $about_us->seo_title ?? ($about_us->title ?? ''),
    'description' => $about_us->meta_description ?? '',
    'keyword' => $about_us->meta_keywords ?? '',
    'schema' => $about_us->seo_schema ?? '',
    'created_at' => $about_us->created_at,
    'updated_at' => $about_us->updated_at,
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
                    <li><a href="{{ route('frontend.home') }}">{{ $about_us->title ?? 'About Us' }}</a></li>
                </ul>
                <h1 class="title wow fadeInUp" data-wow-delay=".5s">{{ $about_us->title ?? 'About Us' }}</h1>
            </div>
        </div>
    </section>

    <!--About Section -->
    <section class="about-section fix section-padding">
        <div class="auto-container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-column-3">
                        <div class="inner-column">
                            <div class="image1 overlay-anim wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{ $about_us->image_1 }}" alt="Image">
                            </div>

                            <div class="image2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ $about_us->image_2 }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-3">
                        <div class="sec-title mb-0">
                            <h6 class="sub-title wow fadeInUp">
                                <span class="triangle triangle1"></span>
                                <span class="triangle triangle2"></span>
                                {{ $about_us->title ?? 'Who we are' }}
                            </h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                {{ $about_us->short_description ?? 'The Journey Behind Our Success' }}</h2>
                        </div>
                        <p class="about-text wow fadeInUp" data-wow-delay=".4s">{!! $about_us->description ?? 'Here goes description' !!}</p>
                        {{-- <div class="about-block wow fadeInUp" data-wow-delay=".6s">
                            <div class="inner-box">
                                                <div class="icon">
                                                    <i class="flaticon-finance-creativity-1-1"></i>
                                                </div>
                                <div class="content">
                                <h4 class="title">Creative Solutions</h4>
                                <p class="text">In today's competitive business landscape, the need for
                                    efficient IT
                                    solutions
                                    has been more critical.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-block wow fadeInUp" data-wow-delay=".8s">
                            <div class="inner-box">
                                            <div class="icon">
                                                <i class="flaticon-finance-edit-tools-1"></i>
                                            </div>
                                <div class="content">
                                <h4 class="title">Actionable Solutions</h4>
                                <p class="text">Innovation is the key to staying ahead in a changing world. We
                                    harness cutting-edge technology</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section-3 section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="feature-box-3">
                        <div class="arrow-shape">
                            <img src="images/home-3/arrow-shape.png" alt="img">
                        </div>
                        <span class="wow fadeInUp" data-wow-delay=".4s"> {{ $settings['universities_title'] }}
                    </div></span>
                    <div class="content px-5 wow fadeInUp" data-wow-delay=".5s">
                        <p>
                            {{ $settings['universities_subtitle'] }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="feature-service-card-items">
                                <div class="icon">
                                    {{-- <i class="flaticon-business-028-briefcase"></i> --}}
                                    <img src="{{ $mission->image_1 }}">
                                </div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">{{ $mission->title }}</a></h3>
                                    <div class="line-clamp-5">
                                        {!! $mission->description !!}
                                    </div>
                                    {{-- <a href="page-service-details.html" class="text-btn">
                                                Read More
                                            </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="feature-service-card-items">
                                <div class="icon">
                                    <img src="{{ $vision->image_1 }}">
                                    {{-- <i class="flaticon-finance-business-expense-svgrepo-com-1"></i> --}}
                                </div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">{{ $vision->title }}</a></h3>
                                    <div class="line-clamp-5">
                                        {!! $vision->description !!}
                                    </div>
                                    {{-- <a href="page-service-details.html" class="text-btn">
                                                Read More
                                            </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--Service Section -->
    <section class="growth-section section-padding bg-cover parallaxie"
        style="background-image: url({{ optional($international)->banner_image ? asset(optional($international)->banner_image) : asset('frontend/assets/images/default-banner.jpg') }});">
        <div class="sec-shape">
            <img class="sway_Y__animation" src="{{ asset('frontend/assets/images/growth-shape.png') }}" alt="Image">
        </div>
        <div class="auto-container">
            <div class="sec-title">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <h6 class="text-white sub-title wow fadeInUp">
                            <span class="triangle triangle1"></span>
                            <span class="triangle triangle2"></span>
                            {{ $international->title ?? '' }}
                        </h6>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">
                            {{ $international->short_description ?? '' }}</h2>
                    </div>

                </div>
            </div>
            <div class="row g-5">
                <div class="content-box content-white">
                    <p class="text-white">{!! $international->description ?? '' !!}</p>
                </div>

            </div>
        </div>
    </section>

    <section class="about-section fix section-padding">
        <div class="auto-container">
            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="about-content-3">
                        <div class="sec-title mb-0">
                            <h6 class="sub-title wow fadeInUp">
                                <span class="triangle triangle1"></span>
                                <span class="triangle triangle2"></span>
                                {{ $experience->title ?? '' }}
                            </h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ $experience->short_description ?? '' }}</h2>
                        </div>
                        <p class="about-text wow fadeInUp" data-wow-delay=".4s">{!! $experience->description ?? '' !!} </p>
                        {{-- <div class="about-block wow fadeInUp" data-wow-delay=".6s">
                            <div class="inner-box">
                                                <div class="icon">
                                                    <i class="flaticon-finance-creativity-1-1"></i>
                                                </div>
                                <div class="content">
                                <h4 class="title">Creative Solutions</h4>
                                <p class="text">In today's competitive business landscape, the need for
                                    efficient IT
                                    solutions
                                    has been more critical.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-block wow fadeInUp" data-wow-delay=".8s">
                            <div class="inner-box">
                                            <div class="icon">
                                                <i class="flaticon-finance-edit-tools-1"></i>
                                            </div>
                                <div class="content">
                                <h4 class="title">Actionable Solutions</h4>
                                <p class="text">Innovation is the key to staying ahead in a changing world. We
                                    harness cutting-edge technology</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-column-3">
                        <div class="inner-column">
                            <div class="image1 overlay-anim wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{ optional($experience)->image_1
    ? asset($experience->image_1)
    : asset('frontend/assets/images/default-image.jpg') }}"
                                    alt="Image">
                            </div>

                            {{-- <div class="image2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ $experience->image_2 }}" alt="Image">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Team Section -->
    <section class="team-section-3 fix section-padding">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h6 class="sub-title wow fadeInUp">
                    <span class="triangle triangle1"></span>
                    <span class="triangle triangle2"></span>
                    {{ $settings['teams_title'] }}
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    {{ $settings['teams_subtitle'] }}
                </h2>
            </div>
            <div class="row">
                 @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-box-items-4">
                            <div class="team-image">
                                <img src="{{ $team->image }}" alt="img">
                                {{-- <img src="{{ $team->image }}" alt="img"> --}}
                            </div>
                            <div class="socials">
                                <i class="fa-solid fa-plus"></i>
                                <ul>

                                    <li><a href="{{ $team->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $team->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="{{  $team->twitter }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <h3 class="title">{{ $team->name }}</h3>
                                <p class="sub-title">{{ $team->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
