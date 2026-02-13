@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')

    <body>
        <div class="page-wrapper">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            {{-- <section class="lets-talk-banner-section parallaxie  section-padding fix bg-cover"
                style="background-image: url('{{ asset('frontend/assets/images/home-2/feature/banner.jpg') }}');">
                <div class="auto-container">
                    <div class="lets-talk-banner-wrapper py-5">
                        <div style=" text-align: center;" class="lets-talk-banner-content ">
                            <h2 class="banner-title wow fadeInUp" data-wow-delay=".2s">
                                Your Start in Japan, Done Right
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Comprehensive support for international students—before arrival, during studies, and
                                beyond graduation.
                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}
            @if ($sliders)
                <section class="lets-talk-banner-section parallaxie section-padding bg-cover"
                    style="background-image: url('{{ asset($sliders->image) }}');">
                    <div
                        class="lets-talk-banner-wrapper d-flex flex-column justify-content-center align-items-center text-center py-5">
                        <div class="lets-talk-banner-content ">

                            <h2 class="banner-title wow fadeInUp" data-wow-delay=".2s">
                                {{ $sliders->title ?? ' ' }}
                            </h2>
                            <div class="banner-subtitle wow fadeInUp" data-wow-delay=".4s">
                                {!! $sliders->description ?? ' ' !!}
                            </div>
                            {{-- <a href="{{ route('frontend.about') }}" class="theme-btn btn-style-one wow fadeInUp"
                                        data-wow-delay=".7s">
                                      Company's Overview
                                        <span class="icon">
                                            <i class="flaticon-finance-fi_3385625"></i>
                                        </span>
                                    </a> --}}
                        </div>
                    </div>
                </section>
            @endif
            <section class="about-section-2 fix section-padding">
                <div class="auto-container">
                    <div class="about-wrapper-2 section-padding pt-0">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <div class="about-image-items-2 wow img-custom-anim-left">
                                    <div class="about-image">
                                        <img src="{{ $about_us->image_1 }}" alt="img">
                                    </div>
                                    <div class="about-counter2">
                                        <div class="count-box">
                                            {{-- <h2>
                                                <span class="count-text" data-speed="3000" data-stop="25">1</span>+
                                            </h2> --}}
                                            <p>
                                                Since 2015
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about-content-2">
                                    <div class="sec-title mb-0">
                                        <h6 class="sub-title wow fadeInUp">
                                            <span class="triangle triangle1"></span>
                                            <span class="triangle triangle2"></span>
                                            {{ $about_us->title ?? ' ' }}
                                        </h6>
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                            {{ $about_us->short_description ?? '' }}</h2>
                                    </div>
                                    <div class="about-text wow fadeInUp" data-wow-delay=".5s">
                                        {!! $about_us->description ?? ' ' !!}
                                    </div>
                                    <a href="{{ route('frontend.about') }}" class="theme-btn btn-style-one wow fadeInUp"
                                        data-wow-delay=".7s">
                                        Company's Overview
                                        <span class="icon">
                                            <i class="flaticon-finance-fi_3385625"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-counter">
                                <div class="count-box">
                                    <h2>
                                        <span class="count-text" data-speed="3000"
                                            data-stop="{{ (int) ($settings['home_counter_students'] ?? 3) }}">
                                            0
                                        </span>K
                                    </h2>

                                    <p>
                                        {{ $settings['home_counter_students_title'] ?? 'Students helped' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="about-counter">
                                <div class="count-box">
                                    <h2>
                                        <span class="count-text" data-speed="3000"
                                            data-stop="{{ (int) ($settings['home_counter_scholarship'] ?? 15) }}">0</span>+
                                    </h2>
                                    <p>
                                        {{ $settings['home_counter_scholarship_title'] ?? 'company connected' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="about-counter">
                                <div class="count-box">
                                    <h2>
                                        <span class="count-text" data-speed="3000"
                                            data-stop="{{ (int) ($settings['home_counter_enrolled'] ?? 4) }}">0</span>K+
                                    </h2>
                                    <p>
                                        {{ $settings['home_counter_enrolled_title'] ?? 'satisfied clients' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Section Start -->
            <section class="service-section section-padding section-bg fix bg-cover"
                style="background-image: url('images/home-1/service/service-bg.jpg')">
                <span class="ellipse-bg"></span>
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <h6 class="sub-title wow fadeInUp">
                            <span class="triangle triangle1"></span>
                            <span class="triangle triangle2"></span>
                            {{ $settings['services_title'] ?? '' }}
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ $settings['services_subtitle'] ?? '' }}</h2>
                    </div>
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
                                        <h3><a
                                                href="{{ route('frontend.servicesingle', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                        </h3>
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
            <!-- Why Choose Us Section Start -->
            <section class="why-choose-section fix section-padding"
                style="background-image: url('images/home-1/choose-us/choose-us-shape.png')">
                <div class="auto-container">
                    <div class="why-choose-us-wrapper">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-5">
                                <div class="why-choose-us-image-1">
                                    @if (!empty($why_choose_us) && !empty($why_choose_us->image))
                                        <img src="{{ $why_choose_us->image }}" alt="img"
                                            class="wow img-custom-anim-left" />
                                    @else
                                        <img src="{{ asset('frontend/assets/images/default.jpg') }}" alt="default"
                                            class="wow img-custom-anim-left" />
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="why-choose-us-content-1">
                                    <div class="sec-title mb-0">
                                        <h6 class="sub-title">
                                            <span class="triangle triangle1"></span>
                                            <span class="triangle triangle2"></span>
                                            {{ $why_choose_us->title ?? '' }}
                                        </h6>
                                        {{-- <h2 class="wow fadeInUp" data-wow-delay=".2s">  {{ $why_choose_us->short_description }}</h2> --}}
                                    </div>
                                    <div class="tab-content">
                                        <div id="Mission" class="tab-pane fade show active">
                                            <div class="why-choose-list custom-list wow fadeInUp" data-wow-delay=".3s">
                                                {!! $why_choose_us->description ?? '' !!}
                                            </div>
                                            {{-- <div class="why-choose-list-items">
                                                <ul class="why-list wow fadeInUp" data-wow-delay=".5s">
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span>
                                                        Expert Guidance for Japan</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> We
                                                        End-to-End Student Support</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> we
                                                        Affordable & Transparent Process</li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service-section-2 section-padding section-bg fix">
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <h6 class="sub-title wow fadeInUp">
                            <span class="triangle triangle1"></span>
                            <span class="triangle triangle2"></span>
                            {{ $settings['courses_title'] ?? '' }}
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ $settings['courses_subtitle'] ?? '' }}</h2>
                    </div>
                    <div class="row">
                        @foreach ($studentsteps as $key => $item)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="service-card-items-2">
                                    <div class="service-icon">
                                        <div class="icon">
                                            {{-- <i class="flaticon-business-028-briefcase"></i> --}}
                                            <img src="{{ $item->image }}">
                                            <div class="service-triangle"></div>
                                        </div>
                                        <span class="number">
                                            0{{ $key + 1 }}
                                        </span>
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{ route('frontend.course') }}">{{ $item->title ?? '' }}</a></h3>
                                        <div class="line-clamp-5">
                                            {{ $item->short_description ?? '' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="service-card-items-2">
                                <div class="service-icon">
                                    <div class="icon">
                                        <i class="lnr-icon-folder-open"></i>
                                        <div class="service-triangle"></div>
                                    </div>
                                    <span class="number">
                                        02
                                    </span>
                                </div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Application & Visa Processing</a></h3>
                                    <p>
                                        We assist with university or language school applications, document preparation,
                                        and
                                        submission.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="service-card-items-2">
                                <div class="service-icon">
                                    <div class="icon">
                                        <i class=" lnr-icon-layers"></i>
                                        <div class="service-triangle"></div>
                                    </div>
                                    <span class="number">
                                        03
                                    </span>
                                </div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Pre-Departure & Arrival Support</a></h3>
                                    <p>
                                        Before departure, we provide orientation, accommodation assistance, and travel
                                        guidance.
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            {{-- <section class="feature-section-3 section-padding fix">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="feature-box-3">
                                <div class="arrow-shape">
                                    <img src="images/home-3/arrow-shape.png" alt="img">
                                </div>
                                <span class="wow fadeInUp" data-wow-delay=".4s"> Our Objectives
                            </div></span>
                            <div class="content px-5 wow fadeInUp" data-wow-delay=".5s">
                                <p>
                                    To simplify life in Japan for international students by providing clear,
                                    practical, and reliable support that helps them navigate education, daily
                                    living, and cultural adaptation with confidence.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row g-4">
                                <div class="col-xl-6 col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-service-card-items">
                                        <div class="icon">
                                            <i class="flaticon-business-028-briefcase"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="page-service-details.html">Mission</a></h3>
                                            <p>
                                                Our mission is to support international students at every stage of their
                                                journey in Japan—from
                                                preparation and arrival to study, work, and independent living.
                                            </p>
                                            <a href="page-service-details.html" class="text-btn">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="feature-service-card-items">
                                        <div class="icon">
                                            <i class="flaticon-finance-business-expense-svgrepo-com-1"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="page-service-details.html">Vision</a></h3>
                                            <p>
                                                To become a trusted bridge between international students and life in Japan,
                                                creating an environment where students feel supported, informed.
                                            </p>
                                            <a href="page-service-details.html" class="text-btn">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section> --}}
        </div>
        <!-- Contact Section Start -->
        <section class="contact-section fix section-padding">
            <div class="auto-container">
                <div class="contact-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-8">
                            <div class="contact-content-1">
                                <div class="sec-title mb-0">
                                    <h6 class="sub-title text-white wow fadeInUp">
                                        <span class="triangle triangle1"></span>
                                        <span class="triangle triangle2"></span>
                                        {{ $settings['contact_title'] ?? '' }}
                                    </h6>
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">
                                        {{ $settings['contact_description'] ?? '' }}</h2>
                                </div>
                                <form id="contactFormHome" class="form-box wow fadeInUp" data-wow-delay=".3s"
                                    action="{{ route('frontend.contact.submit.home') }}" method="post">
                                    @csrf

                                    <div class="row g-4">
                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <input type="text" name="name" placeholder="Full Name*" />
                                                <span class="text-danger error-text name_error"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <input type="text" name="email" placeholder="Email" />
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <input type="text" name="phone" placeholder="Phone" />
                                                <span class="text-danger error-text phone_error"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <span class="text-danger error-text message_error"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="theme-btn btn-style-one w-100">
                                                Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <div id="form-success" class="alert alert-success d-none mt-3"></div>

                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
            <div class="contact-image-1">
                <img src="{{ asset('frontend/assets/images/home-1/contact/contact-image.jpg') }}" alt="img"
                    class="wow img-custom-anim-right" />
                {{-- <div class="shape-image">
                        <img src="images/home-1/contact/shape-1.png" alt="img" />
                    </div> --}}
                <div class="contact-info-box float-bob-y">
                    <h2>{{ $settings['contact_form_title'] ?? '' }}</h2>
                    <ul class="contact-list">
                        <li>
                            <div class="icon">
                                <i class="lnr-icon-phone-handset"></i>
                            </div>
                            <div class="content">
                                <h3>Call Us</h3>
                                <p><a href="tel:+184084152569">{{ $settings['site_phone'] ?? '' }}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="lnr-icon-envelope"></i>
                            </div>
                            <div class="content">
                                <h3>Mail Us</h3>
                                <p><a href="mailto:info@ourmail.com">{{ $settings['site_email'] ?? '' }}</a></p>
                            </div>
                        </li>
                    </ul>
                    <span class="ellipse-bg"></span>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding">
            <div class="auto-container">
                <div class="testimonial-wrapper bg-cover">
                    <div class="sec-title text-center">
                        <h6 class="sub-title wow fadeInUp">
                            <span class="triangle triangle1"></span>
                            <span class="triangle triangle2"></span>
                            {{ $settings['testioninal_title'] ?? '' }}
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            {{ $settings['testioninal_subtitle'] ?? '' }}
                        </h2>
                    </div>
                    <div class="testimonial-wrapper-2">
                        <div class="swiper testimonial-slider-2">
                            <div class="swiper-wrapper">
                                @if ($testimonials && $testimonials->count())
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="testimonial-card-item">
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
                                                    <div class="line-clamp-4">
                                                        {!! $testimonial->description ?? '' !!}
                                                    </div>
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
        <!-- Faq Section Start -->
        <section class="faq-section fix section-padding section-bg bg-cover"
            style="background-image: url('images/home-1/faq/faq-shape.png')">
            <div class="auto-container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-left-items-1">
                            <div class="sec-title mb-0">
                                <h6 class="sub-title wow fadeInUp">
                                    <span class="triangle triangle1"></span>
                                    <span class="triangle triangle2"></span>
                                    {{ $faq_page->title ?? '' }}
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s"> {{ $faq_page->short_description ?? '' }}
                                </h2>
                            </div>
                            <div class="faq-image">
                                <img src="{{ $faq_page->banner_image }}" alt="img"
                                    class="wow img-custom-anim-left" />
                                {{-- <div class="shape-1 float-bob-y">
                                        <img src="images/home-1/faq/shape-01.png" alt="img" />
                                    </div>
                                    <div class="shape-2 float-bob-x">
                                        <img src="images/home-1/faq/shape-02.png" alt="img" />
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-content-1">
                            <ul class="accordion-box">
                                <!--Block-->
                                @foreach ($faq as $item)
                                    <li class="accordion block active-block wow fadeInUp">
                                        <div class="acc-btn">
                                            {{ $item->question ?? '' }}
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">{!! $item->answer ?? '' !!}
                                                </div>
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
        <!-- News Section Start -->
        <section class="news-secton section-padding fix">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h6 class="sub-title wow fadeInUp">
                        <span class="triangle triangle1"></span>
                        <span class="triangle triangle2"></span>
                        {{ $settings['blogs_title'] ?? '' }}
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $settings['blogs_subtitle'] ?? '' }}</h2>
                </div>
                <div class="row">
                    @if (isset($blogs) && $blogs->count())
                        @foreach ($blogs as $item)
                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-box-items">
                                    <div class="news-image">
                                        <img src="{{ $item->image }}" alt="img" />
                                        {{-- <img src="images/home-1/news/news-01.jpg" alt="img" /> --}}
                                        {{-- <span class="post-box">
                                           {{$item->created_at ?? 'now'}}
                                        </span> --}}
                                    </div>
                                    <div class="news-content">
                                        <h3>
                                            <a
                                                href="{{ route('frontend.blogsingle', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                        </h3>
                                        <a href="{{ route('frontend.blogsingle', $item->slug) }}" class="link-btn">
                                            Learn More
                                            <span class="icon"><i class="lnr-icon-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-box-items">
                            <div class="news-image">
                                <img src="{{ asset('frontend/assets/images/home-1/banner-2.jpeg') }}" alt="img" />
                                <span class="post-box">
                                    <span class="date">25</span>
                                    <span class="month">March</span>
                                </span>
                            </div>
                            <div class="news-content">

                                <h3>
                                    <a href="news-details.html">Government & public debate on foreign student
                                        support</a>
                                </h3>
                                <a href="news-details.html" class="link-btn">
                                    Learn More
                                    <span class="icon">
                                        <i class="lnr-icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-box-items">
                            <div class="news-image">
                                <img src="{{ asset('frontend/assets/images/home-1/banner-1.jpg') }}" alt="img" />
                                <span class="post-box">
                                    <span class="date">30</span>
                                    <span class="month">March</span>
                                </span>
                            </div>
                            <div class="news-content">

                                <h3>
                                    <a href="news-details.html">Policy responses to international student </a>
                                </h3>
                                <a href="news-details.html" class="link-btn">
                                    Learn More
                                    <span class="icon">
                                        <i class="lnr-icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        {{-- </div> --}}
    </body>
@endsection
