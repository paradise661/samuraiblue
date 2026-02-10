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

            <!-- Main Header-->

            <!-- Hero Section Start -->
            {{-- <section class="hero-section hero-1">
                <div class="hero-image wow img-custom-anim-right">
                    <img src="{{ asset('frontend/assets/images/home-1/hero/hero-01.png') }}" alt="img" />
                    <div class="shape-2">
                        <img src="{{ asset('frontend/assets/images/home-1/shape-2.png') }}" alt="img" />
                    </div>
                </div>
                <div class="shape-1 float-bob-x">
                    <img src="{{ asset('frontend/assets/images/home-1/shape-1.png') }}" alt="img" />
                </div>
                <div class="shape-3">
                    <img src="{{ asset('frontend/assets/images/home-1/shape-3.png') }}" alt="img" />
                </div>
                <div class="auto-container">
                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-12">
                            <div class="hero-content">
                                <h6 class="wow fadeInUp">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 30 30" fill="none">
                                            <path d="M15 12.5H23.75L10 27.5L13.75 16.25H6.25L16.25 2.5L15 12.5Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    Reliable And Fast Business Solutions
                                </h6>
                                <h1 class="wow fadeInUp" data-wow-delay=".2s">Empower your Business with Our Solutions</h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s">everyone with high and useful reward for
                                    his/her trading, purchase and investment. Our goal is to make the</p>
                                <div class="hero-button wow fadeInUp" data-wow-delay=".6s">
                                    <a href="page-contact.html" class="theme-btn btn-style-one">
                                        Lets Talk With Us
                                        <span class="icon">
                                            <i class="flaticon-finance-fi_3385625"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </section> --}}
            <section class="hero-section hero-5 parallaxie bg-cover"
                style="background-image: url('{{ asset('frontend/assets/images/home-2/about/banner.jpg') }}'); object-fit:cover;">
                <div class="banner-outer">
                    <div class="hero-content" style="text-align: center; font-weight:400;">
                        <h2 class="banner-title wow fadeInUp" data-wow-delay=".2s">
                            Samurai blue
                        </h2>
                        <p class="banner-subtitle wow fadeInUp" data-wow-delay=".2s">Supporting International Students to Settle & Succeed in Japan</p>
                    </div>

                    <div class="hero-box-items">
                        <div class="content-box wow fadeInUp" data-wow-delay=".3s">
                            <p>(406) 555-012022</p>
                            <p>Give Us a Call</p>
                        </div>
                        <div class="content-box wow fadeInUp" data-wow-delay=".5s">
                            <p>Mon - Fri: 8:00AM - 7:00PM</p>
                            <p>Sat - Sun: Closed</p>
                        </div>
                        <div class="content-box wow fadeInUp" data-wow-delay=".8s">
                            <p>65 North Medical Drive</p>
                            <p>Salt Lake City, Australia 84132</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Section Start -->

            <!-- Busnisness Solution Section Start -->
            {{-- <section class="business-solution-section">
                <div class="container pt-0 pb-0">
                    <div class="row g-0">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="feature-left-content-1">
                                <div class="down-shape">
                                    <img src="images/home-1/dawn-2.png" alt="img" />
                                </div>
                                <div class="spiral-shape">
                                    <img src="images/home-1/spiral.png" alt="img" />
                                </div>
                                <h2 class="text-anim">Providing the Best Business Solutions</h2>
                                <div class="client-image">
                                    <img src="images/home-1/client-1.png" alt="img" />
                                    <img src="images/home-1/client-2.png" alt="img" class="icon-2" />
                                    <img src="images/home-1/client-3.png" alt="img" class="icon-3" />
                                    <img src="images/home-1/client-4.png" alt="img" class="icon-4" />
                                </div>
                                <h4>Happy Customers</h4>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>(4.9)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="row g-4">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="feature-business-solution-items-1">
                                        <div class="business-image">
                                            <img src="images/home-1/business-image-1.jpg" alt="img" />
                                            <img src="images/home-1/business-image-1.jpg" alt="img" />
                                        </div>
                                        <div class="content">
                                            <div class="icon">
                                                <i class="flaticon-business-028-briefcase"></i>
                                            </div>
                                            <h3>Consultancy</h3>
                                            <p>everyone with high and useful reward for his/her trading,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="feature-business-solution-items-2">
                                        <div class="content">
                                            <h3>Business Mentor</h3>
                                            <p>everyone with high and useful reward for his/her trading,</p>
                                            <div class="icon"><i
                                                    class="flaticon-finance-business-expense-svgrepo-com-1"></i></div>
                                        </div>
                                        <div class="business-image">
                                            <img src="images/home-1/business-image-2.jpg" alt="img" />
                                            <img src="images/home-1/business-image-2.jpg" alt="img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <!-- About Section Start -->
            {{--
             --}}

            <section class="about-section-2 fix section-padding">
                {{-- <div class="arrow-shape-1 bounce-x">
			<img src="images/home-1/about/arrow-1.png" alt="img">
		</div>
		<div class="arrow-shape-2 bounce-y">
			<img src="images/home-1/about/arrow-2.png" alt="img">
		</div>
		<div class="shape-1">
			<img src="images/home-2/about/shape-1.png" alt="img">
		</div> --}}
                <div class="auto-container">
                    <div class="about-wrapper-2 section-padding pt-0">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <div class="about-image-items-2 wow img-custom-anim-left">
                                    <div class="about-image">
                                        <img src="{{ asset('frontend/assets/images/home-2/about/why-us-img.jpg') }}"
                                            alt="img">
                                    </div>
                                    <div class="about-counter2">
                                        <div class="count-box">
                                            <h2>
                                                <span class="count-text" data-speed="3000" data-stop="25">1</span>+
                                            </h2>
                                            <p>
                                                Years of
                                                Experience
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
                                            Who We Are
                                        </h6>
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Samurai Blue</h2>
                                    </div>

                                    <p class="about-text wow fadeInUp" data-wow-delay=".5s">
                                        Samurai BLUE operates with the mission of supporting foreign nationals who have
                                        chosen Japan for their future.
                                        What we value most is not simply working in Japan, but learning the Japanese
                                        language correctly, understanding the rules and values of Japanese society, and
                                        living while respecting them.
                                        Japanese language ability and social understanding not only protect an individual’s
                                        future, but also become a great strength for the accepting companies, schools, local
                                        communities, and Japanese society as a whole.
                                        For this reason, Samurai BLUE is not a company that prioritizes profit above all
                                        else.
                                        We value people, work to prevent future problems before they occur, and act with the
                                        goal of reducing the burden on schools, companies, and society as much as possible.
                                        Creating a future where each individual becomes independent as a member of Japanese
                                        society and can move forward with pride—
                                        this is the unwavering belief of Samurai BLUE.

                                    </p>
                                    <a href="page-contact.html" class="theme-btn btn-style-one wow fadeInUp"
                                        data-wow-delay=".7s">
                                        Lets Talk With Us
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
                                        <span class="count-text" data-speed="3000" data-stop="1">0</span>M
                                    </h2>
                                    <p>
                                        Worldwide <br>
                                        business Grow
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="about-counter">
                                <div class="count-box">
                                    <h2>
                                        <span class="count-text" data-speed="3000" data-stop="32">0</span>+
                                    </h2>
                                    <p>
                                        Best Business <br>
                                        Awards
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="about-counter">
                                <div class="count-box">
                                    <h2>
                                        <span class="count-text" data-speed="3000" data-stop="3">0</span>K+
                                    </h2>
                                    <p>
                                        Satisfied <br>
                                        Clients
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter Section Start -->
            {{-- <section class="counter-section section-padding pt-0">
                <div class="auto-container">
                    <div class="counter-wrapper">
                        <div class="counter-box-1 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h2><span class="count-text" data-speed="3000" data-stop="1">0</span>M</h2>
                                <p>Worldwide business Grow</p>
                            </div>
                        </div>
                        <div class="counter-box-1 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h2><span class="count-text" data-speed="3000" data-stop="12">0</span>K+</h2>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="counter-box-1 wow bounceInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h2><span class="count-text" data-speed="3000" data-stop="119">0</span>M</h2>
                                <p>Countries Served</p>
                            </div>
                        </div>
                        <div class="counter-box-1 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h2>
                                    <span class="count-text" data-speed="3000" data-stop="33">0</span>
                                </h2>
                                <p>Award winning contest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <!-- Service Section Start -->
            <section class="service-section section-padding section-bg fix bg-cover"
                style="background-image: url('images/home-1/service/service-bg.jpg')">
                <span class="ellipse-bg"></span>
                <div class="auto-container">
                     <div class="sec-title text-center">
                        <h6 class="sub-title wow fadeInUp">
                            <span class="triangle triangle1"></span>
                            <span class="triangle triangle2"></span>
                            Student Journey
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Step by step process</h2>
                    </div>
                </div>
                <div class="service-wrapper">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="service-card-items">
                                <div class="icon"><i class="flaticon-finance-business-expense-svgrepo-com-1"></i></div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Student Support in Japan</a></h3>
                                    <p>We provide reliable student support services in Japan to help you adapt smoothly,
                                        focus on your studies, make suiable income, and build a successful future abroad.</p>
                                    <a href="page-service-details.html" class="link-btn"><i
                                            class="lnr-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="service-card-items">
                                <div class="icon"><i class=" lnr-icon-layers"></i></div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Job Placement & Training</a></h3>
                                    <p>We offer job placement guidance and practical training programs to help students gain
                                        valuable work experience and secure suitable employment opportunities.</p>
                                    <a href="page-service-details.html" class="link-btn"><i
                                            class="lnr-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="service-card-items">
                                <div class="icon"><i class="flaticon-business-023-lifesaver"></i></div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Food & Beverage Training</a></h3>
                                    <p>We provide hands-on food and beverage training to equip students with industry-ready
                                        skills and improve their employability in Japan’s hospitality sector.</p>
                                    <a href="page-service-details.html" class="link-btn"><i
                                            class="lnr-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="service-card-items">
                                <div class="icon"><i class="lnr-icon-folder-open"></i></div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Accommodation Assistance</a></h3>
                                    <p>We help students find safe, affordable accommodation near their institutions,
                                        ensuring comfort and peace of mind during their stay in Japan.</p>
                                    <a href="page-service-details.html" class="link-btn"><i
                                            class="lnr-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Project Section Start -->
            {{-- <section class="project-section fix section-padding">
                <div class="shape-1">
                    <img src="images/home-1/project/shape-1.png" alt="img" />
                </div>
                <div class="shape-2">
                    <img src="images/home-1/project/shape-2.png" alt="img" />
                </div>
                <div class="auto-container">
                    <div class="sec-title">
                        <div class="row g-4 justify-content-between align-items-end">
                            <div class="col-xl-7 col-lg-9">
                                <h6 class="sub-title wow fadeInUp">
                                    <span class="triangle triangle1"></span>
                                    <span class="triangle triangle2"></span>
                                    Case Studies
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">You Prefer to Have full <br />Control for
                                    Business Issues</h2>
                            </div>
                            <div class="col-xl-5 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                                <div class="array-button justify-content-end">
                                    <button class="array-prev"><i class="fa-regular fa-arrow-left"></i></button>
                                    <button class="array-next"><i class="fa-regular fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-wrapper">
                        <div class="swiper project-slider fix">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-card-items">
                                        <div class="project-image">
                                            <img src="images/home-1/project/project-01.jpg" alt="img" />
                                            <img src="images/home-1/project/project-01.jpg" alt="img" />
                                            <span class="number">01</span>
                                        </div>
                                        <div class="project-content">
                                            <div class="arrow-shape">
                                                <img src="images/home-1/project/arrow-shape.png" alt="img" />
                                            </div>
                                            <div class="content">
                                                <h3><a href="page-project-details.html">Technology IT</a></h3>
                                                <p>Business Tech</p>
                                            </div>
                                            <a href="page-project-details.html" class="icon">
                                                <i class="lnr-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card-items">
                                        <div class="project-image">
                                            <img src="images/home-1/project/project-02.jpg" alt="img" />
                                            <img src="images/home-1/project/project-02.jpg" alt="img" />
                                            <span class="number">02</span>
                                        </div>
                                        <div class="project-content">
                                            <div class="arrow-shape">
                                                <img src="images/home-1/project/arrow-shape.png" alt="img" />
                                            </div>
                                            <div class="content">
                                                <h3><a href="page-project-details.html">Orion Finance</a></h3>
                                                <p>Orion Finance</p>
                                            </div>
                                            <a href="page-project-details.html" class="icon">
                                                <i class="lnr-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card-items">
                                        <div class="project-image">
                                            <img src="images/home-1/project/project-03.jpg" alt="img" />
                                            <img src="images/home-1/project/project-03.jpg" alt="img" />
                                            <span class="number">03</span>
                                        </div>
                                        <div class="project-content">
                                            <div class="arrow-shape">
                                                <img src="images/home-1/project/arrow-shape.png" alt="img" />
                                            </div>
                                            <div class="content">
                                                <h3><a href="page-project-details.html">Business Firm</a></h3>
                                                <p>Business Firm</p>
                                            </div>
                                            <a href="page-project-details.html" class="icon">
                                                <i class="lnr-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Marquee Section Start -->
            {{-- <div class="marquee-section fix section-padding pt-0">
                <div class="marquee">
                    <div class="marquee-group">
                        <div class="text">Consulting</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Business</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Consulting</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Finance</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Accounting</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                    </div>
                    <div class="marquee-group">
                        <div class="text">Consulting</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Business</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Consulting</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Finance</div>
                        <div class="text">
                            <img src="images/home-1/dawn.png" alt="img" />
                        </div>
                        <div class="text">Accounting</div>
                    </div>
                </div>
            </div> --}}

            <!-- Why Choose Us Section Start -->
            <section class="why-choose-section fix section-padding"
                style="background-image: url('images/home-1/choose-us/choose-us-shape.png')">
                <div class="auto-container">
                    <div class="why-choose-us-wrapper">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-5">
                                <div class="why-choose-us-image-1">
                                    <img src="{{ asset('frontend/assets/images/home-2/about/why-us.jpg') }}"
                                        alt="img" class="wow img-custom-anim-left" />
                                    {{-- <div class="icon-box-items">
                                        <div class="icon">
                                            <i class="flaticon-business-006-target"></i>
                                        </div>
                                        <h3>Best Business Consulting Awards</h3>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="why-choose-us-content-1">
                                    <div class="sec-title mb-0">
                                        <h6 class="sub-title">
                                            <span class="triangle triangle1"></span>
                                            <span class="triangle triangle2"></span>
                                            Why Choose Us
                                        </h6>
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Expert Guidance for Japan</h2>
                                    </div>
                                    {{-- <ul class="nav">
                                        <li class="nav-item">
                                            <a href="#Mission" data-bs-toggle="tab" class="nav-link active"> Our Mission
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#Vision" data-bs-toggle="tab" class="nav-link"> Our Vision </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#Philosophy" data-bs-toggle="tab" class="nav-link"> Our Philosophy
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#Acchievment" data-bs-toggle="tab" class="nav-link"> Acchievment
                                            </a>
                                        </li>
                                    </ul> --}}
                                    <div class="tab-content">
                                        <div id="Mission" class="tab-pane fade show active">
                                            <div class="why-choose-list wow fadeInUp" data-wow-delay=".3s">
                                                <p>We specialize exclusively in Japan-focused student support, ensuring
                                                    accurate guidance on education, visas, work regulations, and life in
                                                    Japan.
                                                    From course selection and visa processing to accommodation and job
                                                    assistance, we support students at every stage of their journey.We
                                                    believe in honest, cost-effective services with clear guidance and no
                                                    hidden charges, making overseas education more accessible.</p>
                                            </div>
                                            <div class="why-choose-list-items">
                                                <ul class="why-list wow fadeInUp" data-wow-delay=".5s">
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span>
                                                        Expert Guidance for Japan</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> We
                                                        End-to-End Student Support</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> we
                                                        Affordable & Transparent Process</li>
                                                </ul>
                                                {{-- <div class="choose-us-progressbar wow fadeInUp" data-wow-delay=".5s">
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress1">
                                                            <span class="progress-value" id="value1">0%</span>
                                                        </div>
                                                        <div class="text">Success Rate</div>
                                                    </div>
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress2">
                                                            <span class="progress-value" id="value2">0%</span>
                                                        </div>
                                                        <div class="text">Business Growth</div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        {{-- <div id="Vision" class="tab-pane fade">
                                            <div class="why-choose-list">
                                                <h3>Our Vision</h3>
                                                <p>everyone with high and useful reward for his/her trading, purchase
                                                    investment to make the Collabo</p>
                                            </div>
                                            <div class="why-choose-list-items">
                                                <ul class="why-list">
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span>
                                                        Protecting your company</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> We
                                                        offer you solutions</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> we
                                                        take care of you</li>
                                                </ul>
                                                <div class="choose-us-progressbar">
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress3">
                                                            <span class="progress-value" id="value3">0%</span>
                                                        </div>
                                                        <div class="text">Success Rate</div>
                                                    </div>
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress4">
                                                            <span class="progress-value" id="value4">0%</span>
                                                        </div>
                                                        <div class="text">Business Growth</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Philosophy" class="tab-pane fade">
                                            <div class="why-choose-list">
                                                <h3>Our Philosophy</h3>
                                                <p>everyone with high and useful reward for his/her trading, purchase
                                                    investment to make the Collabo</p>
                                            </div>
                                            <div class="why-choose-list-items">
                                                <ul class="why-list">
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span>
                                                        Protecting your company</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> We
                                                        offer you solutions</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> we
                                                        take care of you</li>
                                                </ul>
                                                <div class="choose-us-progressbar">
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress5">
                                                            <span class="progress-value" id="value5">0%</span>
                                                        </div>
                                                        <div class="text">Success Rate</div>
                                                    </div>
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress6">
                                                            <span class="progress-value" id="value6">0%</span>
                                                        </div>
                                                        <div class="text">Business Growth</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Acchievment" class="tab-pane fade">
                                            <div class="why-choose-list">
                                                <h3>Acchievment</h3>
                                                <p>everyone with high and useful reward for his/her trading, purchase
                                                    investment to make the Collabo</p>
                                            </div>
                                            <div class="why-choose-list-items">
                                                <ul class="why-list">
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span>
                                                        Protecting your company</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> We
                                                        offer you solutions</li>
                                                    <li><span class="icon"><i class="fa-solid fa-check"></i></span> we
                                                        take care of you</li>
                                                </ul>
                                                <div class="choose-us-progressbar">
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress7">
                                                            <span class="progress-value" id="value7">0%</span>
                                                        </div>
                                                        <div class="text">Success Rate</div>
                                                    </div>
                                                    <div class="progress-container">
                                                        <div class="circular-progress" id="progress8">
                                                            <span class="progress-value" id="value8">0%</span>
                                                        </div>
                                                        <div class="text">Business Growth</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
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
                            Student Journey
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Step by step process</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-card-items-2">
                                <div class="service-icon">
                                    <div class="icon">
                                        <i class="flaticon-business-028-briefcase"></i>
                                        <div class="service-triangle"></div>
                                    </div>
                                    <span class="number">
                                        01
                                    </span>
                                </div>
                                <div class="content">
                                    <h3><a href="page-service-details.html">Consultation & Course Selection</a></h3>
                                    <p>
                                        We begin with a personalized consultation to understand the student’s goals,
                                        academic background.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
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
                                        We assist with university or language school applications, document preparation, and
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Section Start -->
            {{-- <section class="team-section fix">
                <div class="team-wrapper section-padding">
                    <div class="auto-container">
                        <div class="sec-title text-center">
                            <h6 class="sub-title wow fadeInUp">
                                <span class="triangle triangle1"></span>
                                <span class="triangle triangle2"></span>
                                Our Team
                            </h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                Our Experienced <br />
                                team member
                            </h2>
                        </div>
                        <div class="team-bg-shape section-bg">
                            <img src="images/home-1/team/team-bg-shape.png" alt="img" />
                        </div>
                    </div>
                    <div class="swiper team-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-box-items">
                                    <div class="team-image">
                                        <img src="images/home-1/team/team-01.jpg" alt="img" />
                                        <img src="images/home-1/team/team-01.jpg" alt="img" />
                                        <div class="arrow-shape"><img src="images/home-1/team/arrow-shape.png"
                                                alt="img" /></div>
                                        <div class="team-content">
                                            <div class="content">
                                                <h4><a href="page-team-details.html">Arion Hezel</a></h4>
                                                <p>Arion Hezel</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <span class="share-icon fa fa-share-alt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box-items">
                                    <div class="team-image">
                                        <img src="images/home-1/team/team-02.jpg" alt="img" />
                                        <img src="images/home-1/team/team-02.jpg" alt="img" />
                                        <div class="arrow-shape"><img src="images/home-1/team/arrow-shape.png"
                                                alt="img" /></div>
                                        <div class="team-content">
                                            <div class="content">
                                                <h4><a href="page-team-details.html">Wade Warren</a></h4>
                                                <p>Founder, finclix</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <span class="share-icon fa fa-share-alt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box-items">
                                    <div class="team-image">
                                        <img src="images/home-1/team/team-03.jpg" alt="img" />
                                        <img src="images/home-1/team/team-03.jpg" alt="img" />
                                        <div class="arrow-shape"><img src="images/home-1/team/arrow-shape.png"
                                                alt="img" /></div>
                                        <div class="team-content">
                                            <div class="content">
                                                <h4><a href="page-team-details.html">Jacob Jones</a></h4>
                                                <p>CEO, finclix</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <span class="share-icon fa fa-share-alt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box-items">
                                    <div class="team-image">
                                        <img src="images/home-1/team/team-04.jpg" alt="img" />
                                        <img src="images/home-1/team/team-04.jpg" alt="img" />
                                        <div class="arrow-shape"><img src="images/home-1/team/arrow-shape.png"
                                                alt="img" /></div>
                                        <div class="team-content">
                                            <div class="content">
                                                <h4><a href="page-team-details.html">Cody Fisher</a></h4>
                                                <p>Arion Hezel</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <span class="share-icon fa fa-share-alt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-box-items">
                                    <div class="team-image">
                                        <img src="images/home-1/team/team-05.jpg" alt="img" />
                                        <img src="images/home-1/team/team-05.jpg" alt="img" />
                                        <div class="arrow-shape"><img src="images/home-1/team/arrow-shape.png"
                                                alt="img" /></div>
                                        <div class="team-content">
                                            <div class="content">
                                                <h4><a href="page-team-details.html">Dianne Russell</a></h4>
                                                <p>Admin, finclix</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <span class="share-icon fa fa-share-alt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-dot">
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <!-- Contact Section Start -->
            <section class="contact-section fix section-padding">
                {{-- <div class="contact-shape">
                    <img src="images/home-1/contact/contact-shape.png" alt="img" />
                </div> --}}
                <div class="auto-container">
                    <div class="contact-wrapper">
                        <div class="row g-4">
                            <div class="col-lg-6 col-md-8">
                                <div class="contact-content-1">
                                    <div class="sec-title mb-0">
                                        <h6 class="sub-title text-white wow fadeInUp">
                                            <span class="triangle triangle1"></span>
                                            <span class="triangle triangle2"></span>
                                            Contact Us
                                        </h6>
                                        <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">Please Keep in Touch With
                                            us When you want</h2>
                                    </div>
                                    <form id="contact_form" class="form-box wow fadeInUp" data-wow-delay=".3s"
                                        name="contact_form"
                                        action="https://html.kodesolution.com/2025/finclix-html/includes/sendmail.php"
                                        method="post">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <input type="text" name="form_name" id="name"
                                                        placeholder="Full Name*" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <input type="text" name="form_email" id="email"
                                                        placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <input type="text" name="form_phone" id="phone"
                                                        placeholder="Phone" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <textarea name="form_message" id="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-clt">
                                                    <input name="form_botcheck" class="form-control" type="hidden"
                                                        value="" />
                                                    <button type="submit" class="theme-btn btn-style-one w-100"
                                                        data-loading-text="Please wait...">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                        <h2>Still Have you Any Question?</h2>
                        <ul class="contact-list">
                            <li>
                                <div class="icon">
                                    <i class="lnr-icon-phone-handset"></i>
                                </div>
                                <div class="content">
                                    <h3>Call Us</h3>
                                    <p><a href="tel:+184084152569">+1840 8415 2569</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="lnr-icon-envelope"></i>
                                </div>
                                <div class="content">
                                    <h3>Mail Us</h3>
                                    <p><a href="mailto:finclix@ourmail.com">finclix@ourmail.com</a></p>
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
                                Testimonials
                            </h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                What our top Customers <br />
                                Say About us
                            </h2>
                        </div>
                        <div class="swiper testimonial-slider fix">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info-items">
                                            <div class="client-image">
                                                <img src="{{ asset('frontend/assets/images/home-1/testimonial/download.png') }}"
                                                    alt="img" />
                                                <div class="quote-icon">
                                                    <i class="lnr-icon-quote"></i>
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <h5>Ramesh K.</h5>
                                                <span>Language School Student, Tokyo</span>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p>“Samurai Blue guided me through every step of my journey to Japan. From visa
                                                processing to accommodation support, everything was smooth and stress-free.”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info-items">
                                            <div class="client-image">
                                                <img src="{{ asset('frontend/assets/images/home-1/testimonial/download.png') }}"
                                                    alt="img" />
                                                <div class="quote-icon">
                                                    <i class="lnr-icon-quote"></i>
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <h5>Sita P.</h5>
                                                <span>F&B Training Program, Osaka</span>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p>“The Food & Beverage training provided by Samurai Blue helped me gain
                                                practical skills and confidence. They also assisted me in finding a
                                                part-time job, which made living in Japan much easier.”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info-items">
                                            <div class="client-image">
                                                <img src="{{ asset('frontend/assets/images/home-1/testimonial/download.png') }}"
                                                    alt="img" />
                                                <div class="quote-icon">
                                                    <i class="lnr-icon-quote"></i>
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <h5>Anil S.</h5>
                                                <span>Working Student, Yokohama</span>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p>“I was worried about managing studies and work in Japan, but Samurai Blue
                                                made everything clear. Their guidance on job placement and language support
                                                was extremely helpful.”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-dot mt-5 mb-0">
                                <div class="dot2"></div>
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
                                        FAQ’S
                                    </h6>
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Frequently Asked Quetions</h2>
                                </div>
                                <div class="faq-image">
                                    <img src="{{ asset('frontend/assets/images/home-1/faq.jpg') }}"
                                        alt="img" class="wow img-custom-anim-left" />
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
                                    <li class="accordion block active-block wow fadeInUp">
                                        <div class="acc-btn">
                                            Can I work while studying?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Yes. International students in Japan are allowed to
                                                    work part-time for up to 28 hours per week with proper work permission,
                                                    helping them support their living expenses and gain work experience.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".2s">
                                        <div class="acc-btn active">
                                            How much does accommodation cost?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Accommodation costs vary by location and type. On
                                                    average, students can expect to pay between ¥30,000 to ¥60,000 per month
                                                    for shared housing or student accommodation.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".4s">
                                        <div class="acc-btn">
                                            Is Japanese language required?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Basic Japanese is recommended but not always required
                                                    at the beginning. Many institutions offer Japanese language courses, and
                                                    we provide guidance to help students improve their language skills after
                                                    arrival.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".6s">
                                        <div class="acc-btn">
                                            What jobs are available?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Students commonly work in restaurants, convenience
                                                    stores, factories, hotels, supermarkets, and cleaning services. Food &
                                                    Beverage roles are especially popular for part-time work.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".8s">
                                        <div class="acc-btn">
                                            How long is Food & Beverage (F&B) training?
                                            <div class="icon fa fa-plus"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Food & Beverage training typically lasts between 3 to 6
                                                    months, depending on the program and skill level, and includes both
                                                    practical and on-the-job training.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cta Contact Section Start -->
            {{-- <section class="cta-contact-section fix">
                <div class="auto-container">
                    <div class="cta-contact-wrapper bg-cover" style="background-image: url('images/home-1/cta-bg.jpg')">
                        <div class="left-shape float-bob-x">
                            <img src="images/home-1/left-shape.png" alt="img" />
                        </div>
                        <h3 class="font-size-32 text-white font-weight-600 wow fadeInUp" data-wow-delay=".3s">No strategy
                            for the Long-Term</h3>
                        <a href="page-contact.html" class="theme-btn btn-style-one wow fadeInUp"
                            data-wow-delay=".5s">Lets Talk With Us</a>
                    </div>
                </div>
            </section> --}}

            <!-- News Section Start -->
            <section class="news-secton section-padding fix">
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <h6 class="sub-title wow fadeInUp">
                            <span class="triangle triangle1"></span>
                            <span class="triangle triangle2"></span>
                            Our Blog
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Insights from Latest Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ asset('frontend/assets/images/home-1/ssw.jpg') }}"
                                        alt="img" />
                                    {{-- <img src="images/home-1/news/news-01.jpg" alt="img" /> --}}
                                    <span class="post-box">
                                        <span class="date">20</span>
                                        <span class="month">March</span>
                                    </span>
                                </div>
                                <div class="news-content">
                                    <ul class="comments-list">
                                        <li><i class="lnr-icon-user1"></i> Admin</li>
                                        <li><i class="lnr-icon-comment"></i> 3 Comments</li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">Record high number of international students</a>
                                    </h3>
                                    <a href="news-details.html" class="link-btn">
                                        Learn More
                                        <span class="icon"><i class="lnr-icon-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ asset('frontend/assets/images/home-1/banner-2.jpeg') }}" alt="img" />
                                    {{-- <img src="images/home-1/news/news-02.jpg" alt="img" /> --}}
                                    <span class="post-box">
                                        <span class="date">25</span>
                                        <span class="month">March</span>
                                    </span>
                                </div>
                                <div class="news-content">
                                    <ul class="comments-list">
                                        <li><i class="lnr-icon-user1"></i> Admin</li>
                                        <li><i class="lnr-icon-comment"></i> 3 Comments</li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">Government & public debate on foreign student support</a>
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
                                    {{-- <img src="images/home-1/news/news-03.jpg" alt="img" /> --}}
                                    <span class="post-box">
                                        <span class="date">30</span>
                                        <span class="month">March</span>
                                    </span>
                                </div>
                                <div class="news-content">
                                    <ul class="comments-list">
                                        <li><i class="lnr-icon-user1"></i> Admin</li>
                                        <li><i class="lnr-icon-comment"></i> 3 Comments</li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">Policy responses to international student  </a>
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
                    </div>
                </div>
            </section>

            <!-- Footer Section Start -->
            <footer class="footer-section-1 fix footer-bg bg-cover"
                style="background-image: url(images/home-1/footer-shape.png)">
                <span class="circle-shape"></span>
                <span class="circle-shape-2"></span>
                <div class="auto-container">
                    <div class="footer-newsletter-wrapper">
                        <div class="footer-newsletter-left wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="lnr-icon-envelope"></i>
                            </div>
                            <h3 class="text-white font-weight-700 font-size-28"> subscribe to <br /> newsletter</h3>
                        </div>
                        <form action="#" class="wow fadeInUp" data-wow-delay=".5s">
                            <div class="form-clt">
                                <input type="text" name="email" id="email2" placeholder="Your email address" />
                                <button class="arrow-icon" type="submit">
                                    <i class="lnr-icon-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-widget-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="footer-widget-items mt-30">
                                    <div class="widget-title mb-25">
                                        <a href="index.html" class="footer-logo">
                                            <img src="images/home-1/logo/white-logo.svg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="footer-content">
                                        <p>everyone with high and useful reward for his/her trading</p>
                                        <div class="social-icon">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="footer-widget-items mt-30">
                                    <div class="widget-title mb-25">
                                        <h3 class="font-size-24 text-white font-weight-500">Company</h3>
                                    </div>
                                    <ul class="user-links">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="page-about.html">About us</a></li>
                                        <li><a href="page-services.html">Services</a></li>
                                        <li><a href="page-contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="footer-widget-items mt-30">
                                    <div class="widget-title mb-25">
                                        <h3 class="font-size-24 text-white font-weight-500">Support</h3>
                                    </div>
                                    <ul class="user-links">
                                        <li><a href="page-service-details.html">Customer Support</a></li>
                                        <li><a href="page-service-details.html">Privacy & policy</a></li>
                                        <li><a href="page-service-details.html">Terms & condition</a></li>
                                        <li><a href="page-service-details.html">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="footer-widget-items mt-30">
                                    <div class="widget-title mb-25">
                                        <h3 class="font-size-24 text-white font-weight-500">Contact Us</h3>
                                    </div>
                                    <ul class="contact-list">
                                        <li>
                                            <i class="lnr-icon-phone-handset"></i>
                                            <p><a href="tel:+1050055900">+10500-55-900</a></p>
                                        </li>
                                        <li>
                                            <i class="lnr-icon-envelope"></i>
                                            <p><a href="mailto:finclix@help.us">info@help.us</a></p>
                                        </li>
                                        <li>
                                            <i class="lnr-icon-map-marker"></i>
                                            <p>44 Danwers, NY City, USA, 70-102</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="auto-container">
                        <p class="wow fadeInUp" data-wow-delay=".3s">Copyright © 2025 . All Rights Reserved</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End Page Wrapper -->

        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/gsap.js"></script>
        <script src="js/gsap-scroll-to-plugin.js"></script>
        <script src="js/gsap-scroll-smoother.js"></script>
        <script src="js/gsap-scroll-trigger.js"></script>
        <script src="js/gsap-split-text.js"></script>
        <script src="js/split-type.min.js"></script>
        <script src="js/parallaxie.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/bxslider.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/knob.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/mixitup.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact-form-script.js"></script>
    </body>
@endsection
